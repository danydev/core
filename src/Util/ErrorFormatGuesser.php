<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ApiPlatform\Core\Util;

use Symfony\Component\HttpFoundation\Request;

/**
 * Guesses the error format to use.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
final class ErrorFormatGuesser
{
    private function __construct()
    {
    }

    /**
     * Get the error format and its associated MIME type.
     *
     * @param Request $request
     * @param array   $errorFormats
     *
     * @return array
     */
    public static function guessErrorFormat(Request $request, array $errorFormats) : array
    {
        $requestFormat = $request->getRequestFormat(null);
        if (null !== $requestFormat && isset($errorFormats[$requestFormat])) {
            return ['key' => $requestFormat, 'value' => $errorFormats[$requestFormat]];
        }

        reset($errorFormats);

        return each($errorFormats);
    }
}
