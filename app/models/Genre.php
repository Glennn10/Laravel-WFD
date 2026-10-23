<?php
class Genre
{
    public function getAll()
    {
        return [
            ['id' => 1, 'name' => 'Fiksi', 'description' => 'Cerita rekaan berupa novel dan cerpen yang bersumber dari imajinasi penulis.'],
            ['id' => 2, 'name' => 'Non-Fiksi', 'description' => 'Buku berbasis fakta, seperti pengetahuan umum, panduan, dan esai.'],
            ['id' => 3, 'name' => 'Fantasi', 'description' => 'Cerita dengan dunia, makhluk, dan unsur sihir yang tidak ada di dunia nyata.'],
            ['id' => 4, 'name' => 'Sains', 'description' => 'Buku tentang ilmu pengetahuan dan teknologi.'],
            ['id' => 5, 'name' => 'Biografi', 'description' => 'Kisah hidup seorang tokoh yang ditulis berdasarkan fakta.'],
        ];
    }
}
