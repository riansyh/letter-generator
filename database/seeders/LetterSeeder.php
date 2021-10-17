<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LetterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('letters')->insert([
            'name' => 'Surat Izin Kerja Alasan Sakit',
            'opening' => 'Saya yang bertanda tangan di bawah ini:',
            'main' => 'Bermaksud mengajukan izin tidak masuk kerja karena adanya keperluan keluarga yang tidak dapat ditinggalkan. Selama tidak dapat masuk kerja, saya tetap dapat dihubungi melalui telepon atau email bila ada keperluan pekerjaan yang  mendesak. Sementara pekerjaan yang saya tinggalkan selama izin akan segera saya selesaikan setelah kembali bekerja.',
            'closing' => 'Demikian surat permohonan izin tidak masuk kerja ini saya sampaikan. Atas perhatian dan kebijaksanaannya saya ucapkan terima kasih. ',
        ]);
    }
}
