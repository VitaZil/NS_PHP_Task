<?php

namespace Vitab\NsTask;

class MainClass
{
    public function __construct(private string $command,
                                private string $value)
    {
    }

    public function main(): void
    {
        match ($this->command) {
            '1' => $this->saveData($this->value, 'salary'),
            '2' => $this->saveData($this->value, 'tax_exemption'),
            '3' => $this->saveData($this->value, 'income'),
            '4' => (new OutputHandler())->output(),
            '5' => 'Quit',
        };
    }

    public function saveData(string $data, string $fileName): void
    {
        $filePath = (__DIR__ . '/database/' . $fileName . '.json');

        file_put_contents($filePath, json_encode($data));
    }
}
