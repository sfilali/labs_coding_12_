<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccueilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accueils')->insert([
            "urlmenulogo" => "img/big-logo.png",
            "lien1" => "Home",
            "lien2" => "Services",
            "lien3" => "Blog",
            "lien4" => "Contact",
            "slogan" => "Get your freebie template now!",
            "urlvideo" => "https://www.youtube.com/watch?v=JgHfx2v9zOU",
            "titretestimonials" => "What our clients say",
            "titreteam" => "Get in the Lab and  meet the team",
            "titreready" => "Are you ready to stand out?",
            "soustitreready" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.",
            "boutonready" => "Brouwse",

        ]);
        DB::table('bannieres')->insert([
            "imgurl" => "img/01.jpg",
        ]);
        DB::table('bannieres')->insert([
            "imgurl" => "img/02.jpg",
        ]);
        DB::table('presentations')->insert([
            "titre" => "Get in the Lab and discover the world",
            "texteL" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Donec maximus ipsum non ornare vporttitor porttitorestibulum. Sed libero nibh, feugiat at enim id, bibendum sollicitudin arcu.",
            "texteR" => "Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. Quisque porttitor porttitorlaoreet vel risus et luctus.",
            "boutton" => "Brouwse",
        ]);
        DB::table('testimonials')->insert([
            "nom" => "Michael Smith 8",
            "fonction" => "CEO Company",
            "imgurl" => "img/avatar/01.jpg",
            "commentaire" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
        ]);
        DB::table('testimonials')->insert([
            "nom" => "Michael Smith 7",
            "fonction" => "CEO Company",
            "imgurl" => "img/avatar/01.jpg",
            "commentaire" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
        ]);
        DB::table('testimonials')->insert([
            "nom" => "Michael Smith 6",
            "fonction" => "CEO Company",
            "imgurl" => "img/avatar/01.jpg",
            "commentaire" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
        ]);
        DB::table('testimonials')->insert([
            "nom" => "Michael Smith 5",
            "fonction" => "CEO Company",
            "imgurl" => "img/avatar/02.jpg",
            "commentaire" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
        ]);
        DB::table('testimonials')->insert([
            "nom" => "Michael Smith 4",
            "fonction" => "CEO Company",
            "imgurl" => "img/avatar/01.jpg",
            "commentaire" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
        ]);
        DB::table('testimonials')->insert([
            "nom" => "Michael Smith 3",
            "fonction" => "CEO Company",
            "imgurl" => "img/avatar/02.jpg",
            "commentaire" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
        ]);
        DB::table('testimonials')->insert([
            "nom" => "Michael Smith 2",
            "fonction" => "CEO Company",
            "imgurl" => "img/avatar/01.jpg",
            "commentaire" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
        ]);
        DB::table('testimonials')->insert([
            "nom" => "Michael Smith 1",
            "fonction" => "CEO Company",
            "imgurl" => "img/avatar/02.jpg",
            "commentaire" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
        ]);

        
        DB::table('teams')->insert([
            "imgurl" => "img/team/1.jpg",
            "nom" => "Christinne Williams",
            "fonction" => "Project Manager",
        ]);
        DB::table('teams')->insert([
            "imgurl" => "img/team/2.jpg",
            "nom" => "Christinne Williams",
            "fonction" => "Junior developer",
        ]);
        DB::table('teams')->insert([
            "imgurl" => "img/team/3.jpg",
            "nom" => "Christinne Williams",
            "fonction" => "Digital designer",
        ]);
        
    }
}
