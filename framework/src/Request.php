<?php

#[AllowDynamicProperties]
class Request
{
    private array $input = [];

    private array $errors = [];

    private string $validation_msg = 'The field is invalid';

    public function __construct()
    {

        $this->input = array_merge($this->trim(array_merge($_GET, $_POST)), $_FILES);
        foreach ($this->input as $key => $value) {
            $this->$key = $value;
        }

        return $this;
    }

    public function validate(array $rules, array $messages = []): void
    {
        foreach ($rules as $key => $ruleSet) {
            if (is_string($ruleSet)) {
                $ruleSet = explode('|', $ruleSet);
            }
            foreach ($ruleSet as $rule) {
                if (!$this->validateRule($key, $rule)) {
                    $this->errors[$key] = $messages[$key][$rule] ?? $this->validation_msg;
                }
            }
        }
        if (!empty($this->errors)) {
            $_SESSION['errors'] = $this->errors;
            foreach ($this->input as $key => $value) {
                if (is_array($value)) {
                    $_SESSION['old'][$key] = $value;
                } else {
                    $_SESSION['old'][$key] = htmlspecialchars($value);
                }
            }
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function append($key, $value): void
    {
        $this->input[$key] = $value;
    }

    public function all(): array
    {
        return $this->input;
    }

    public function end(): void
    {
        unset($_SESSION['old']);
        unset($_SESSION['errors']);
        unset($_SESSION['flash']);
        die();
    }

    public function validateRule(string $key, string $rule): bool
    {
        if (!isset($this->input[$key])) {
            return false;
        }

        $tmp = explode(':', $rule);
        $rule = $tmp[0];
        if (!$this->$rule($this->input[$key], $tmp[1] ?? '')) {
            return false;
        }
        return true;
    }

    private function trim(mixed $data): string|array
    {
        if (is_array($data)) {
            return array_map('trim', $data);
        }
        return trim($data ?? '');
    }

    private function required(mixed $data, string $option = ''): bool
    {
        $this->validation_msg = 'Dit veld is verplicht';
        return !empty($data);
    }

    private function integer(mixed $data, string $option = ''): bool
    {
        $this->validation_msg = 'Dit veld moet een getal zijn';
        if(!is_numeric($data)){
            return false;
        }
        return is_int($data+0);
    }

    private function length(string $data, string $option = ''): bool
    {
        $this->validation_msg = 'Dit veld moet tussen de ' . $option . ' karakters zijn';
        list($min, $max) = explode(',', $option);
        if ((int)$min > (int)$max) {
            $max = INF;
        }
        return strlen($data) >= $min && strlen($data) <= $max;
    }

    private function email(string $data, string $option = ''): bool
    {
        $this->validation_msg = 'Dit veld moet een geldig email adres zijn';
        return filter_var($data, FILTER_VALIDATE_EMAIL);
    }

    private function url(string $data, string $option = ''): bool
    {
        $this->validation_msg = 'Dit veld moet een geldige url zijn';
        return filter_var($data, FILTER_VALIDATE_URL);
    }

    private function date(string $data, string $option = ''): bool
    {
        $this->validation_msg = 'Dit veld moet een geldige datum zijn';
        return strtotime($data);
    }

    private function min(mixed $data, string $option = ''): bool
    {
        if (is_numeric($data)) {
            $this->validation_msg = 'Dit veld moet minimaal ' . $option . ' zijn';
            return $data >= $option;
        } elseif (is_string($data)) {
            $this->validation_msg = 'Dit veld moet minimaal ' . $option . ' karakters zijn';
            return strlen($data) >= $option;
        } elseif (is_array($data)) {
            $this->validation_msg = 'Dit veld moet minimaal ' . $option . ' items hebben';
            return count($data) >= $option;
        }
        return false;
    }

    private function max(mixed $data, string $option = ''): bool
    {
        if (is_numeric($data)) {
            $this->validation_msg = 'Dit veld moet maximaal ' . $option . ' zijn';
            return $data <= $option;
        } elseif (is_string($data)) {
            $this->validation_msg = 'Dit veld moet maximaal ' . $option . ' karakters zijn';
            return strlen($data) <= $option;
        } elseif (is_array($data)) {
            $this->validation_msg = 'Dit veld moet maximaal ' . $option . ' items hebben';
            return count($data) <= $option;
        }
        return false;
    }

    private function between(mixed $data, string $option = ''): bool
    {
        $tmp = explode(',', $option);
        $min = $tmp[0] ?? 0;
        $max = $tmp[1] ?? INF;
        if (is_numeric($data) or empty($data)) {
            $this->validation_msg = 'Dit veld moet tussen de ' . $min . ' en ' . $max . ' zijn';
            return $data >= $min && $data <= $max;
        } elseif (is_string($data)) {
            $this->validation_msg = 'Dit veld moet tussen de ' . $min . ' en ' . $max . ' karakters zijn';
            return strlen($data) >= $min && strlen($data) <= $max;
        } elseif (is_array($data)) {
            $this->validation_msg = 'Dit veld moet tussen de ' . $min . ' en ' . $max . ' items hebben';
            return count($data) >= $min && count($data) <= $max;
        }
        return false;
    }

    private function in(mixed $data, string $option = ''): bool
    {
        $this->validation_msg = 'Dit veld moet een van de volgende waardes hebben: ' . $option;
        $options = explode(',', $option);
        return in_array($data, $options);
    }

    private function not_in(mixed $data, string $option = ''): bool
    {
        $this->validation_msg = 'Dit veld mag niet een van de volgende waardes hebben: ' . $option;
        $options = explode(',', $option);
        return !in_array($data, $options);
    }

    private function numeric(mixed $data, string $option = ''): bool
    {
        $this->validation_msg = 'Dit veld moet een getal zijn';
        return is_numeric($data);
    }

    private function date_format(mixed $data, string $option = ''): bool
    {
        $this->validation_msg = 'Dit veld moet een geldige datum zijn in het formaat ' . $option;
        return date_create_from_format($option, $data);
    }

    private function date_before(mixed $data, string $option = ''): bool
    {
        $this->validation_msg = 'Dit veld moet een datum voor ' . $option . ' zijn';
        return strtotime($data) < strtotime($option);
    }

    private function date_after(mixed $data, string $option = ''): bool
    {
        $this->validation_msg = 'Dit veld moet een datum na ' . $option . ' zijn';
        return strtotime($data) > strtotime($option);
    }

    private function date_between(mixed $data, string $option = ''): bool
    {
        $this->validation_msg = 'Dit veld moet een datum tussen ' . $option . ' zijn';
        list($min, $max) = explode(',', $option);
        return strtotime($data) >= strtotime($min) && strtotime($data) <= strtotime($max);
    }

    private function regex(mixed $data, string $option = ''): bool
    {
        $this->validation_msg = 'Dit veld moet voldoen aan de regex ' . $option;
        return preg_match($option, $data);
    }

    //The file under validation must be an image (jpg, jpeg, png, bmp, gif, svg, or webp).
    private function image(mixed $data, string $option = ''): bool
    {
        $this->validation_msg = 'Dit veld moet een afbeelding zijn';
        $allowedExtensions = array("jpg", "jpeg", "png", "gif", "svg", "webp");
        $imageFileType = strtolower(pathinfo($data['name'], PATHINFO_EXTENSION));
        return in_array($imageFileType, $allowedExtensions) && getimagesize($data['tmp_name']);
    }


}