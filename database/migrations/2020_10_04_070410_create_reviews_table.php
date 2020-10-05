 <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateReviewsTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('reviews', function (Blueprint $table) {
                $table->string('card_id')->unique();
                $table->foreign('card_id')
                    ->references('card_id')->on('users');
                $table->integer('house_id');
                $table->foreign('house_id')
                    ->references('house_id')->on('houses');
                $table->float('review');
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('reviews');
        }
    }
//
