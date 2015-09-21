<?php
/**
 * SetterValidation.php
 *
 * @copyright PowerLinks
 * @author Manuel Kanah <manuel@powerlinks.com>
 * Date: 03/09/15 - 09:45
 */

namespace PowerLinks\OpenRtb\Tools\Traits;

use PowerLinks\OpenRtb\Tools\Exceptions\ExceptionInvalidValue;

trait SetterValidation
{
    /**
     * @param string $string
     * @param string $line
     * @return bool
     * @throws ExceptionInvalidValue
     */
    protected function validateString($string, $line = '')
    {
        if ( ! is_string($string)) {
            throw new ExceptionInvalidValue(
                sprintf('Argument\'s value is not a string - %s : %s', __CLASS__, $line)
            );
        }
        return true;
    }

    /**
     * @param int $int
     * @param string $line
     * @return bool
     * @throws ExceptionInvalidValue
     */
    protected function validateInt($int, $line = '')
    {
        if ( ! is_int($int)) {
            throw new ExceptionInvalidValue(
                sprintf('Argument\'s value is not an integer - %s : %s', __CLASS__, $line)
            );
        }
        return true;
    }

    /**
     * @param int $int
     * @param string $line
     * @return bool
     * @throws ExceptionInvalidValue
     */
    protected function validatePositiveInt($int, $line = '')
    {
        if ( ! is_int($int) || $int < 0) {
            throw new ExceptionInvalidValue(
                sprintf('Argument\'s value is not a valid integer - %s : %s', __CLASS__, $line)
            );
        }
        return true;
    }

    /**
     * @param float $float
     * @param string $line
     * @return bool
     * @throws ExceptionInvalidValue
     */
    protected function validateFloat($float, $line = '')
    {
        if ( ! is_float($float)) {
            throw new ExceptionInvalidValue(
                sprintf('Argument\'s value is not a float - %s : %s', __CLASS__, $line)
            );
        }
        return true;
    }

    /**
     * @param float $float
     * @param string $line
     * @return bool
     * @throws ExceptionInvalidValue
     */
    protected function validatePositiveFloat($float, $line = '')
    {
        if ( ! is_float($float) || $float < 0) {
            throw new ExceptionInvalidValue(
                sprintf('Argument\'s value is not a float - %s : %s', __CLASS__, $line)
            );
        }
        return true;
    }

    /**
     * @param mixed $value
     * @param array $values
     * @param string $line
     * @return bool
     * @throws ExceptionInvalidValue
     */
    protected function validateIn($value, array $values, $line = '')
    {
        if ( ! in_array($value, $values)) {
            throw new ExceptionInvalidValue(
                sprintf('Argument\'s value is not allowed - %s : %s', __CLASS__, $line)
            );
        }
        return true;
    }

    /**
     * @param string $md5
     * @param string $line
     * @return bool
     * @throws ExceptionInvalidValue
     */
    protected function validateMd5($md5, $line = '')
    {
        if ( ! is_string($md5) || ! (bool) preg_match('/^[0-9a-f]{32}$/i', $md5)) {
            throw new ExceptionInvalidValue(
                sprintf('Argument\'s value is not an MD5 - %s : %s', __CLASS__, $line)
            );
        }
        return true;
    }

    /**
     * @param string $sha1
     * @param string $line
     * @return bool
     * @throws ExceptionInvalidValue
     */
    protected function validateSha1($sha1, $line = '')
    {
        if ( ! is_string($sha1) || ! (bool) preg_match('/^[0-9a-f]{40}$/i', $sha1)) {
            throw new ExceptionInvalidValue(
                sprintf('Argument\'s value is not a SHA1 - %s : %s', __CLASS__, $line)
            );
        }
        return true;
    }
}