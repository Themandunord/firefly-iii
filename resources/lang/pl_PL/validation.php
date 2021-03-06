<?php
/**
 * validation.php
 * Copyright (c) 2017 thegrumpydictator@gmail.com
 *
 * This file is part of Firefly III.
 *
 * Firefly III is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Firefly III is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Firefly III. If not, see <http://www.gnu.org/licenses/>.
 */
declare(strict_types=1);

return [
    'iban'                           => 'To nie jest prawidłowy IBAN.',
    'unique_account_number_for_user' => 'Wygląda na to, że ten numer konta jest już w użyciu.',
    'deleted_user'                   => 'Ze względu na zabezpieczenia nie możesz się zarejestrować używając tego adresu e-mail.',
    'rule_trigger_value'             => 'Ta wartość jest nieprawidłowa dla wybranego wyzwalacza.',
    'rule_action_value'              => 'Ta wartość jest nieprawidłowa dla wybranej akcji.',
    'file_already_attached'          => 'Przesłany plik ":name" jest już dołączony do tego obiektu.',
    'file_attached'                  => 'Pomyślnie wgrano plik ":name".',
    'file_invalid_mime'              => 'Plik ":name" jest typu ":mime", który nie jest akceptowany jako nowy plik do przekazania.',
    'file_too_large'                 => 'Plik ":name" jest zbyt duży.',
    'belongs_to_user'                => 'Wartość :attribute jest nieznana',
    'accepted'                       => ':attribute musi zostać zaakceptowany.',
    'bic'                            => 'To nie jest prawidłowy BIC.',
    'more'                           => ':attribute musi być większy od zera.',
    'active_url'                     => ':attribute nie jest prawidłowym adresem URL.',
    'after'                          => ':attribute musi być datą późniejszą od :date.',
    'alpha'                          => ':attribute może zawierać tylko litery.',
    'alpha_dash'                     => ':attribute może zawierać litery, cyfry oraz myślniki.',
    'alpha_num'                      => ':attribute może zawierać jedynie litery oraz cyfry.',
    'array'                          => ':attribute musi być tablicą.',
    'unique_for_user'                => 'Istnieje już wpis z tym :attribute.',
    'before'                         => ':attribute musi być wcześniejszą datą w stosunku do :date.',
    'unique_object_for_user'         => 'Ta nazwa jest już w użyciu',
    'unique_account_for_user'        => 'Ta nazwa konta jest już w użyciu',
    'between.numeric'                => ':attribute musi się mieścić w zakresie pomiędzy :min a :max.',
    'between.file'                   => ':attribute musi się mieścić w zakresie pomiędzy :min oraz :max kilobajtów.',
    'between.string'                 => ':attribute musi zawierać pomiędzy :min a :max znaków.',
    'between.array'                  => ':attribute musi zawierać pomiędzy :min a :max elementów.',
    'boolean'                        => 'Pole :attribute musi być prawdą albo fałszem.',
    'confirmed'                      => 'Pole :attribute i jego potwierdzenie nie pasują do siebie.',
    'date'                           => ':attribute nie jest prawidłową datą.',
    'date_format'                    => ':attribute rożni się od formatu :format.',
    'different'                      => ':attribute oraz :other muszą się różnić.',
    'digits'                         => ':attribute musi składać się z :digits cyfr.',
    'digits_between'                 => ':attribute musi mieć od :min do :max cyfr.',
    'email'                          => ':attribute musi być prawidłowym adresem email.',
    'filled'                         => 'Pole :attribute jest wymagane.',
    'exists'                         => 'Wybrane :attribute są nieprawidłowe.',
    'image'                          => ':attribute musi być obrazkiem.',
    'in'                             => 'Wybrany :attribute jest nieprawidłowy.',
    'integer'                        => ':attribute musi być liczbą całkowitą.',
    'ip'                             => ':attribute musi być poprawnym adresem IP.',
    'json'                           => ':attribute musi być prawidłowym węzłem JSON.',
    'max.numeric'                    => ':attribute nie może być większy niż :max.',
    'max.file'                       => ':attribute nie może być większy niż :max kilobajtów.',
    'max.string'                     => ':attribute nie może być dłuższy od :max znaków.',
    'max.array'                      => ':attribute nie może zawierać więcej niż :max elementów.',
    'mimes'                          => ':attribute musi być plikiem typu :values.',
    'min.numeric'                    => ':attribute musi być przynajmniej :min.',
    'min.file'                       => ':attribute musi mieć przynajmniej :min kilobajtów.',
    'min.string'                     => ':attribute musi mieć co najmniej :min znaków.',
    'min.array'                      => ':attribute musi zawierać przynajmniej :min elementów.',
    'not_in'                         => 'Wybrany :attribute jest nieprawidłowy.',
    'numeric'                        => ':attribute musi byc liczbą.',
    'regex'                          => 'Format :attribute jest nieprawidłowy.',
    'required'                       => 'Pole :attribute jest wymagane.',
    'required_if'                    => 'Pole :attribute jest wymagane gdy :other jest :value.',
    'required_unless'                => 'Pole :attribute jest wymagane, chyba że :other jest w :values.',
    'required_with'                  => 'Pole :attribute jest wymagane gdy :values jest podana.',
    'required_with_all'              => 'Pole :attribute jest wymagane gdy :values jest podana.',
    'required_without'               => 'Pole :attribute jest wymagane gdy :values nie jest podana.',
    'required_without_all'           => ':attribute jest wymagane, gdy żadna z wartości :values nie jest podana.',
    'same'                           => 'Pole :attribute oraz :other muszą się zgadzać.',
    'size.numeric'                   => ':attribute musi być wielkości :size.',
    'size.file'                      => ':attribute musi mieć :size kilobajtów.',
    'size.string'                    => ':attribute musi mieć :size znaków.',
    'size.array'                     => ':attribute musi zawierać :size elementów.',
    'unique'                         => 'Taki :attribute już występuje.',
    'string'                         => ':attribute musi być ciągiem znaków.',
    'url'                            => 'Format :attribute jest nieprawidłowy.',
    'timezone'                       => ':attribute musi być prawidłową strefą.',
    '2fa_code'                       => 'Format :attribute jest nieprawidłowy.',
    'dimensions'                     => ':attribute ma nieprawidłowe wymiary obrazu.',
    'distinct'                       => 'Pole :attribute zawiera zduplikowaną wartość.',
    'file'                           => ':attribute musi być plikiem.',
    'in_array'                       => 'Pole :attribute nie istnieje w :other.',
    'present'                        => 'Pole :attribute musi być obecne.',
    'amount_zero'                    => 'Całkowita kwota nie może być zerem',
    'secure_password'                => 'To nie jest bezpieczne hasło. Proszę spróbować ponownie. Aby uzyskać więcej informacji odwiedź https://goo.gl/NCh2tN',
];
