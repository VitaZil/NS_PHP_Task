<?php

namespace Vitab\NsTask\Classes;

class MainClass
{
    private $data = [];
    private string $filePath;

    public function __construct(){

        $this->filePath = (__DIR__ . '/../database/data.json');
        $this->data = $this->getData();

    }

    public function main(): void
    {
        do {
            $input = new InputHandler();
            $input->input();

            $command = readline('Choose command: ');

            $value = '';

            if ($command == 1 || $command == 2 || $command == 3) {
                do {
                    $value = readline('Input value: ');
                    echo !$input->validateValue($value) ? 'Value is not correct' . PHP_EOL : '';
                } while (
                    $input->validateValue($value) == false
                );
            }

            match ($command) {
                '1' => $this->changeValue($value, 'salary'),
                '2' => $this->changeValue($value, 'tax_exemption'),
                '3' => $this->changeValue($value, 'income'),
                '4' => (new OutputHandler())->output(),
                '5' => 'Quit',
                default => var_dump('Command not exist'),
            };
        } while ($command != 5);
    }

    public function getData():array
    {
        return json_decode(file_get_contents($this->filePath), true);
    }

    public function changeValue(string $newValue, string $key): void
    {
        $this->data[$key] = $newValue;

        $this->saveData($this->data);
    }

    public function saveData(array $data): void
    {
        file_put_contents($this->filePath, json_encode($data));
    }
}
