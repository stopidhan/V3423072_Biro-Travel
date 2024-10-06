<?php
class Form
{
    private $action;
    private $method;

    public function __construct($action = "", $method = "POST")
    {
        $this->action = $action;
        $this->method = $method;
    }

    public function startForm()
    {
        return "<form action='$this->action' method='$this->method'>";
    }

    public function inputText($name, $label)
    {
        return "<label for='$name'>$label</label><br>
                <input type='text' id='$name' name='$name'><br><br>";
    }

    public function inputPassword($name, $label)
    {
        return "<label for='$name'>$label</label><br>
                <input type='password' id='$name' name='$name'><br><br>";
    }

    public function inputRadio($name, $label, $options)
    {
        $radioButtons = "<label>$label</label><br>";
        foreach ($options as $value => $optionLabel) {
            $radioButtons .= "<input type='radio' name='$name' value='$value'> $optionLabel<br>";
        }
        return $radioButtons . "<br>";
    }

    public function inputCheckbox($name, $label, $options)
    {
        $checkboxes = "<label>$label</label><br>";
        foreach ($options as $value => $optionLabel) {
            $checkboxes .= "<input type='checkbox' name='{$name}[]' value='$value'> $optionLabel<br>";
        }
        return $checkboxes . "<br>";
    }

    public function selectDropdown($name, $label, $options)
    {
        $dropdown = "<label for='$name'>$label</label><br>";
        $dropdown .= "<select id='$name' name='$name'>";
        foreach ($options as $value => $optionLabel) {
            $dropdown .= "<option value='$value'>$optionLabel</option>";
        }
        $dropdown .= "</select><br><br>";
        return $dropdown;
    }

    public function textarea($name, $label)
    {
        return "<label for='$name'>$label</label><br>
                <textarea id='$name' name='$name'></textarea><br><br>";
    }

    public function submitButton($text)
    {
        return "<button type='submit'>$text</button>";
    }

    public function endForm()
    {
        return "</form>";
    }
}