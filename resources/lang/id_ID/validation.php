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
    'iban'                           => 'Ini bukan IBAN yang valid.',
    'unique_account_number_for_user' => 'Sepertinya nomor rekening ini sudah digunakan.',
    'deleted_user'                   => 'Kerena kendala keamanan, anda tidak bisa mendaftar menggunkan alamat email ini.',
    'rule_trigger_value'             => 'Nilai ini tidak validi untuk trigger yang dipilih.',
    'rule_action_value'              => 'Nilai ini tidak valid untuk tindakan yang dipilih.',
    'file_already_attached'          => 'Upload file ";name" sudah terpasang pada objek ini.',
    'file_attached'                  => 'File yang diupload dengan sukses ":name.',
    'file_invalid_mime'              => 'File ":name" adalah tipe ":mime" yang tidak diterima sebagai upload baru.',
    'file_too_large'                 => 'File "; name" terlalu besar.',
    'belongs_to_user'                => 'Nilai dari :attribute tidak diketahui',
    'accepted'                       => ':attribute harus diterima.',
    'bic'                            => 'Ini bukan BIC yang valid.',
    'more'                           => ':attribute harus lebih besar dari nol.',
    'active_url'                     => ':attribute bukan URL yang valid.',
    'after'                          => ':attribute harus tanggal setelah :date.',
    'alpha'                          => ':attribute hanya boleh berisi huruf.',
    'alpha_dash'                     => ':attribute hanya boleh berisi huruf, angka dan tanda hubung.',
    'alpha_num'                      => ':attribute hanya boleh berisi huruf dan angka.',
    'array'                          => ':attribute harus berupa array.',
    'unique_for_user'                => 'Sudah ada entri dengan :attribute ini.',
    'before'                         => ':attribute harus tanggal sebelum :date.',
    'unique_object_for_user'         => 'Nama ini sudah digunakan',
    'unique_account_for_user'        => 'Nama akun ini sudah digunakan',
    'between.numeric'                => ':attribute harus antara :min dan :max.',
    'between.file'                   => ':attribute harus antara :min dan :max kilobyte.',
    'between.string'                 => ':attribute harus antara :min dan :max karakter.',
    'between.array'                  => ':attribute harus antara :min dan :max item.',
    'boolean'                        => 'Bidang :attribute harus benar atau salah.',
    'confirmed'                      => 'Konfirmasi :attribute tidak cocok.',
    'date'                           => ':attribute bukan tanggal yang valid.',
    'date_format'                    => ':attribute tidak cocok dengan the format :format.',
    'different'                      => ':attribute dan :other harus berbeda.',
    'digits'                         => ':attribute harus angka :digits.',
    'digits_between'                 => ':attribute harus antara :min dan :max angka.',
    'email'                          => ':attribute harus alamat email yang valid.',
    'filled'                         => 'Bidang :attribute diperlukan.',
    'exists'                         => ':attribute yang dipilih tidak valid.',
    'image'                          => ':attribute harus gambar.',
    'in'                             => ':attribute yang dipilih tidak valid.',
    'integer'                        => ':attribute harus bilangan bulat.',
    'ip'                             => ':attribute harus alamat IP yang valid.',
    'json'                           => ':attribute harus string JSON yang valid.',
    'max.numeric'                    => ':attribute tidak boleh lebih besar dari :max.',
    'max.file'                       => ':attribute tidak boleh lebih besar dari kilobyte :max.',
    'max.string'                     => ':attribute tidak boleh lebih besar dari karakter :max.',
    'max.array'                      => ':attribute tidak boleh memiliki lebih dari item :max.',
    'mimes'                          => ':attribute harus jenis file: :values.',
    'min.numeric'                    => ':attribute harus sedikitnya :min.',
    'min.file'                       => 'Atribut harus minimal kilobyte :min.',
    'min.string'                     => ':attribute harus minimal karakter :min.',
    'min.array'                      => ':attribute harus minimal item :min.',
    'not_in'                         => ':attribute yang dipilih tidak valid.',
    'numeric'                        => ':attribute harus angka.',
    'regex'                          => 'Format :attribute tidak valid.',
    'required'                       => 'Bidang :attribute diperlukan.',
    'required_if'                    => 'Bidang :attribute diperlukan ketika :other adalah :value.',
    'required_unless'                => 'Bidang :attribute diperlukan minimal :other adalah dalam :values.',
    'required_with'                  => 'Bidang :attribute diperlukan ketika :values terdapat nilai.',
    'required_with_all'              => 'Bidang :attribute diperlukan ketika :values ada.',
    'required_without'               => 'Bidang :attribute diperlukan ketika :values tidak ada.',
    'required_without_all'           => 'Bidang :attribute diperlukan ketika tidak ada satupun :values ada.',
    'same'                           => ':attribute dan :other harus cocok.',
    'size.numeric'                   => ':attribute harus :size.',
    'size.file'                      => ':attribute harus kilobyte :size.',
    'size.string'                    => ':attribute harus karakter :size.',
    'size.array'                     => ':attribute harus berisi item :size.',
    'unique'                         => ':attribute sudah diambil.',
    'string'                         => ':attribute harus sebuah string.',
    'url'                            => 'Format atribut tidak valid.',
    'timezone'                       => ':attribute harus zona yang valid.',
    '2fa_code'                       => 'Bidang :attribute tidak valid.',
    'dimensions'                     => ':attribute memiliki dimensi gambar yang tidak valid.',
    'distinct'                       => 'Bidang :attribute memiliki nilai duplikat.',
    'file'                           => ':attribute harus berupa file.',
    'in_array'                       => 'Bidang :attribute tidak ada in :other.',
    'present'                        => 'Bidang :attribute harus ada.',
    'amount_zero'                    => 'Jumlah total tidak boleh nol',
    'secure_password'                => 'Ini bukan kata sandi yang aman. Silahkan coba lagi. Untuk informasi lebih lanjut, kunjungi https://goo.gl/NCh2tN',
];
