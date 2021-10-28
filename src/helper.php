<?php
    function api(string $namespace): array
    {
        return load_json(__DIR__ . "/data/$namespace/api.json");
    }

    function load_json(string $path): array
    {
        return json_decode(
            file_get_contents($path),
            true
        );
    }