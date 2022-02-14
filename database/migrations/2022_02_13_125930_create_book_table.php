<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->string('description');
            $table->timestamps();
        });
        DB::table('book')->insert(
            array(
                'title' => '5 CM',
                'author' => 'Donny Dhirgantoro',
                'description' => 'Novel ini menceritakan perjalanan lima orang sahabat yang bernama Arial, Riani Zafran, Ian, dan Genta di gunung yang terjal. Mereka harus menghadapi rintangan medan pegunungan yang tidak mudah dilalui.'
            )

        );
        DB::table('book')->insert(
            array(
                'title' => 'Bumi Manusia',
                'author' => 'Pramoedya Ananta Toer',
                'description' => 'Pramoedya Ananta Toer merupakan tokoh sastrawan yang sangat dikenal luas masyarakat Indonesia atas karya-karya apiknya. Meski beberapa kali terlibat dalam situasi panas politik dan idealis negeri sendiri, Pram tetap menuliskan kisah-kisah luar biasa.'
            )

        );
        DB::table('book')->insert( 
            array(
                'title' => 'Laskar Pelangi',
                'author' => 'Andrea Hirata',
                'description' => 'Kisah anak-anak tidak selalu diwarnai dengan bermacam sukacita. Laskar Pelangi pun hadir dengan ceritanya yang berbeda. Di balik canda tawa dan keseruan anak-anak SD Muhammadiyah Belitung, terdapat duka dan masalah pahit yang mereka deritakan.'
            )

        );
        DB::table('book')->insert(
            array(
                'title' => 'Lelaki Harimau',
                'author' => 'Eka Kurniawan',
                'description' => 'Setelah terbitnya Cantik Itu Luka, Eka Kurniawan menerbitkan kembali novel Indonesia terbaru miliknya yang berjudul Lelaki Harimau. Salah satu rekomendasi novel Indonesia terbaik ini menceritakan kisah satu keluarga dan bermacam masalahnya.'
            )

        );
        DB::table('book')->insert(
            array(
                'title' => 'Negeri 5 Menara',
                'author' => 'Ahmad Fuadi',
                'description' => 'Kehidupan enam santri dari enam daerah berbeda yang menuntut ilmu di suatu pondok pesantren menjadi landasan cerita novel ini.'
            )

        );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book');
    }
};
