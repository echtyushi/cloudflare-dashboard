<?php

namespace App\Framework\Foundation;

/**
 * This class represents a simple class for managing a collection of parameters.
 *
 * @package App\Framework\Foundation
 */
class ParameterBag
{
    /**
     * The parameters stored in the bag.
     *
     * @var array
     */
    protected array $parameters;

    /**
     * ParameterBag constructor.
     *
     * @param array $parameters An associative array of parameters.
     */
    public function __construct(array $parameters = [])
    {
        $this->parameters = $parameters;
    }

    /**
     * Get all parameters.
     *
     * @return array An associative array of parameters.
     */
    public function all(): array
    {
        return $this->parameters;
    }

    /**
     * Get the value of a parameter.
     *
     * @param string $key The key of the parameter.
     * @param mixed $default The default value if the parameter is not found.
     * @return mixed The value of the parameter, or the default value if not found.
     */
    public function get(string $key, $default = null)
    {
        return $this->parameters[$key] ?? $default;
    }

    /**
     * Set a parameter.
     *
     * @param string $key The key of the parameter.
     * @param mixed $value The value of the parameter.
     */
    public function set(string $key, $value)
    {
        $this->parameters[$key] = $value;
    }

    /**
     * Check if a parameter exists.
     *
     * @param string $key The key of the parameter.
     * @return bool True if the parameter exists, false otherwise.
     */
    public function has(string $key): bool
    {
        return isset($this->parameters[$key]);
    }

    /**
     * Remove a parameter.
     *
     * @param string $key The key of the parameter to be removed.
     */
    public function remove(string $key)
    {
        unset($this->parameters[$key]);
    }
}