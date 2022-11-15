<?php

namespace Vitab\NsTask\Classes;

class MainClass
{
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
                '1' => $this->saveData($value, 'salary'),
                '2' => $this->saveData($value, 'tax_exemption'),
                '3' => $this->saveData($value, 'income'),
                '4' => (new OutputHandler())->output(),
                '5' => 'Quit',
                default => var_dump('Command not exist'),
            };
        } while ($command != 5);
    }

    public function saveData(string $data, string $fileName): void
    {
        $filePath = (__DIR__ . '/../database/' . $fileName . '.json');

        file_put_contents($filePath, json_encode($data));
    }
}
