<?php

namespace design_patterns\Factory\SimpleFactory\Computer;


class ComputerFactory
{
    public static function getComputer(string $type, string $ram, string $hdd, string $cpu)
    {
        switch ($type) {
            case "PC":
                return new PC($ram, $hdd, $cpu);
                break;
            case "Server":
                return new Server($ram, $hdd, $cpu);
                break;
        }
        return null;
    }

}
