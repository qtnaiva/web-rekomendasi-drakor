<html>
<head>
    <title>Rekomendasi Drama Korea</title>
    <style>
        body { 
            font-family: Arial, sans-serif;
            padding: 70px;
        }
        h2 {
            background-color: pink;
            padding: 20px;
        }
        .drama {
            display: inline-block;
            width: 200px;
            margin: 10px;
            text-align: center;
            border: 1px solid gray;
            border-radius: 8px;
            padding: 10px;
        }
        .drama img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .btn-trailer {
            display: inline-block;
            margin-top: 5px;
            padding: 5px 10px;
            background-color: green;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
        .btn-trailer:hover {
            background-color: green;
        }
        .rating {
            margin-top: 5px;
            font-weight: bold;
            color: orange;
        }
    </style>
</head>
<body>

<h1>Rekomendasi Drama Korea</h1>

<?php
$dramas = [
    [
        "judul" => "Vincenzo",
        "genre" => "Action / Thriller",
        "tahun" => 2021,
        "rating" => 8.4,
        "poster" => "https://i.pinimg.com/736x/86/e7/be/86e7be6828a1bb3003391e94b9681fcb.jpg",
        "trailer" => "https://youtu.be/_J8tYxYB_YU?si=QY9tdTx-Bo9a8wPr"
    ],
    [
        "judul" => "Queen of Tears",
        "genre" => "Romance",
        "tahun" => 2024,
        "rating" => 8.2,
        "poster" => "https://i.pinimg.com/736x/fe/b4/6d/feb46dcfd088f79f551f8fd91c167377.jpg",
        "trailer" => "https://youtu.be/Gg2D8zrzlOA?si=xSUeg9qBMpQlghq-"
    ],
    [
        "judul" => "Descendants of the Sun",
        "genre" => "Romance",
        "tahun" => 2016,
        "rating" => 8.2,
        "poster" => "https://i.pinimg.com/736x/28/c4/a9/28c4a96f97a0ee6c65832c9d883ab5ab.jpg",
        "trailer" => "https://youtu.be/wkHjOTFv60g?si=iS8Ywee2FeD0_j8n"
    ],
	[
        "judul" => "My Name",
        "genre" => "Action / Thriller",
        "tahun" => 2021,
        "rating" => 7.8,
        "poster" => "https://i.pinimg.com/736x/8e/74/a0/8e74a0e96359a77d90aa5f8c0926d6c0.jpg",
        "trailer" => "https://youtu.be/MaJ7ZT70ve4?si=gKJ3NuEFNJxFOmMe"
    ],
	[
        "judul" => "Twinkling Watermelon",
        "genre" => "Fantasi",
        "tahun" => 2023,
        "rating" => 8.9,
        "poster" => "https://i.pinimg.com/736x/df/3c/9d/df3c9ddebad0bff4b2ec60d38adefa20.jpg",
        "trailer" => "https://youtu.be/DqceSqn0hiA?si=4zelLWR7ycVHJKDk"
    ],
	[
        "judul" => "Twenty-Five Twenty-One",
        "genre" => "Romance",
        "tahun" => 2022,
        "rating" => 8.6,
        "poster" => "https://i.pinimg.com/736x/b9/38/27/b93827b452e1d7f64871ccd4374533e1.jpg",
        "trailer" => "https://youtu.be/gYp4cKumTwU?si=RX-wDb1R1pk3itu4"
    ],
	[
        "judul" => "All of Us Are Dead",
        "genre" => "Action / Thriller",
        "tahun" => 2022,
        "rating" => 7.6,
        "poster" => "https://i.pinimg.com/736x/d5/40/e2/d540e26c7cb6631e22ba87cfc05e2189.jpg",
        "trailer" => "https://youtu.be/IN5TD4VRcSM?si=at9H8lVusvg6rKNL"
    ],
	[
        "judul" => "Happiness",
        "genre" => "Action / Thriller",
        "tahun" => 2021,
        "rating" => 7.5,
        "poster" => "https://i.pinimg.com/736x/cc/43/3f/cc433ff308a2ca0db9f9ae127620ce14.jpg",
        "trailer" => "https://youtu.be/gqhUlldiLEo?si=Pf4v4mTAaOFv4cn1"
    ],
	[
        "judul" => "Duty After School",
        "genre" => "Action / Thriller",
        "tahun" => 2023,
        "rating" => 8.5,
        "poster" => "https://i.pinimg.com/736x/f4/82/f1/f482f1c7b6fdee32e66276cf23f0b900.jpg",
        "trailer" => "https://youtu.be/yNkfTd8R7x0?si=evzdFk8rhdjp2Tlf",
    ],
	[
        "judul" => "Weak Hero",
        "genre" => "Action / Thriller",
        "tahun" => 2022,
        "rating" => 8.5,
        "poster" => "https://i.pinimg.com/736x/eb/21/7a/eb217a323aa3e774b02a0a6a15c1ffc8.jpg",
        "trailer" => "https://youtu.be/RRDByzGXhSA?si=TnDf53L9spKkupue",
    ],
	[
        "judul" => "True Beauty",
        "genre" => "Romance",
        "tahun" => 2020,
        "rating" => 7.9,
        "poster" => "https://i.pinimg.com/736x/d5/54/e2/d554e29506de1c84c3fc7a371e520b5f.jpg",
        "trailer" => "https://youtu.be/BhP1eYQ5Pxk?si=mzw-vJW-IB6x6avG",
    ],
	[
        "judul" => "Sweet Home",
        "genre" => "Action / Thriller",
        "tahun" => 2020,
        "rating" => 7.2,
        "poster" => "https://i.pinimg.com/736x/0b/2f/eb/0b2feb6c8d97e1576d9e3b7128548383.jpg",
        "trailer" => "https://youtu.be/7rI56NmD33Y?si=xh5ZOqNuwRbyZp-j",
    ],
	[
        "judul" => "Taxi Driver",
        "genre" => "Action / Thriller",
        "tahun" => 2021,
        "rating" => 8.1,
        "poster" => "https://i.pinimg.com/736x/0a/de/3c/0ade3c24e5a1ce8c54c6c6d661ac2062.jpg",
        "trailer" => "https://youtu.be/Hnnhq_fTV5c?si=VURzeqQZUrxtw4rf",
    ],
	[
        "judul" => "Moving",
        "genre" => "Action / Thriller",
        "tahun" => 2023,
        "rating" => 8.4,
        "poster" => "https://i.pinimg.com/736x/65/2d/17/652d174ec2158275342f9f5996a2c167.jpg",
        "trailer" => "https://youtu.be/NbHy4UlQv_s?si=6Qub5gWYwA46fy15",
    ],
	[
        "judul" => "Tomorrow",
        "genre" => "Fantasi",
        "tahun" => 2022,
        "rating" => 8.0,
        "poster" => "https://i.pinimg.com/736x/63/50/4d/63504d439b9ec67d8e67f8535ae8dd01.jpg",
        "trailer" => "https://youtu.be/BsNRPkOV_Mo?si=oFoijrjUxEnz5FAK",
    ],
	[
        "judul" => "Vagabond",
        "genre" => "Action / Thriller",
        "tahun" => 2019,
        "rating" => 8.1,
        "poster" => "https://i.pinimg.com/736x/95/5d/f3/955df33b2cfc3c0e3834f0ac05963aab.jpg",
        "trailer" => "https://youtu.be/tyhnEHCUtv4?si=QctO8iDHlQc9m8GY",
    ],
	[
        "judul" => "Study Group",
        "genre" => "Action / Thriller",
        "tahun" => 2025,
        "rating" => 8.6,
        "poster" => "https://i.pinimg.com/736x/5b/ac/a9/5baca9c5ef31a25ee6505f194477e447.jpg",
        "trailer" => "https://youtu.be/Bx0piV_Uf4E?si=wYOo-Ycj6TwcWWyN",
    ],
	[
        "judul" => "Mr. Plankton",
        "genre" => "Romance",
        "tahun" => 2024,
        "rating" => 8.1,
        "poster" => "https://i.pinimg.com/736x/20/92/10/2092100e0b7f9980742ca83eebfe0896.jpg",
        "trailer" => "https://youtu.be/mt4wezFpLvA?si=jUZ-tHMp6gnReX4v",
    ],
	[
        "judul" => "The King: Eternal Monarch",
        "genre" => "Fantasi",
        "tahun" => 2020,
        "rating" => 8.1,
        "poster" => "https://i.pinimg.com/736x/d7/67/17/d76717de32973384ee82e3940b3c5c59.jpg",
        "trailer" => "https://youtu.be/jJwuFjmfjRY?si=GZtzD4tgrWcZPCig",
    ],
	[
        "judul" => "Lovestruck in the City",
        "genre" => "Romance",
        "tahun" => 2020,
        "rating" => 7.6,
        "poster" => "https://i.pinimg.com/736x/30/8e/9d/308e9d5049693f123749d5c614ccbefe.jpg",
        "trailer" => "https://youtu.be/aUYiS8ZGWc8?si=mX6PvnQoIkjSo1AP",
    ],
	[
        "judul" => "Fight for My Way",
        "genre" => "Romance",
        "tahun" => 2017,
        "rating" => 8.1,
        "poster" => "https://i.pinimg.com/736x/23/34/3f/23343feeddca9e997c1f8d5379fbdba9.jpg",
        "trailer" => "https://youtu.be/pIh-X7o1Y-U?si=eCSYbwTkim7-Zvvi",
    ],
	[
        "judul" => "Our Beloved Summer",
        "genre" => "Romance",
        "tahun" => 2021,
        "rating" => 8.2,
        "poster" => "https://i.pinimg.com/736x/fd/28/dc/fd28dc240ff0f91ecb7f9e1883ca9bec.jpg",
        "trailer" => "https://youtu.be/wpW6aVWgvMc?si=hjlGsit4vxcHBuD8",
    ],
	[
        "judul" => "Doom at Your Service",
        "genre" => "Fantasi",
        "tahun" => 2021,
        "rating" => 7.8,
        "poster" => "https://i.pinimg.com/736x/69/5a/3e/695a3eab9cd2f63b508429ef4fa89b92.jpg",
        "trailer" => "https://youtu.be/_V5w-SG8ERs?si=gC2iZEqSppMlOuQa",
    ],
	[
        "judul" => "W: Two Worlds",
        "genre" => "Fantasi",
        "tahun" => 2016,
        "rating" => 8.0,
        "poster" => "https://i.pinimg.com/736x/64/bb/67/64bb67b8ce0787e3334ea0439e514927.jpg",
        "trailer" => "https://youtu.be/iFyxffHNwvE?si=OnVrNTHvkii2mSvI",
    ],
	[
        "judul" => "Sisyphus: The Myth",
        "genre" => "Fantasi",
        "tahun" => 2021,
        "rating" => 7.0,
        "poster" => "https://i.pinimg.com/736x/f2/11/27/f21127de9f5676f79f1165aff49ba18d.jpg",
        "trailer" => "https://youtu.be/-qMlwHnQmGM?si=DYDQS2EwpHEXH63a",
    ],
	[
        "judul" => "100 Days My Prince",
        "genre" => "Romance",
        "tahun" => 2018,
        "rating" => 7.8,
        "poster" => "https://i.pinimg.com/736x/08/46/72/084672771a2868ad20a5497c125785a0.jpg",
        "trailer" => "https://youtu.be/X_Vz4q06vK8?si=M2trHH0D2r7SOViN",
    ],
	[
        "judul" => "Alchemy of Souls 2",
        "genre" => "Fantasi",
        "tahun" => 2022,
        "rating" => 8.7,
        "poster" => "https://i.pinimg.com/736x/2d/7f/db/2d7fdb758aff3ccd551650baa65683a1.jpg",
        "trailer" => "https://youtu.be/5Q0GvDGJolg?si=xUUn3hN9-hMJe-rV",
    ],
	[
        "judul" => "A Shop for Killers ",
        "genre" => "Action / Thriller",
        "tahun" => 2024,
        "rating" => 8.0,
        "poster" => "https://i.pinimg.com/736x/15/18/73/151873efb0aaa2547a8f5ba8f8b2964a.jpg",
        "trailer" => "https://youtu.be/69nzLpyMSHw?si=jBhW_HTTgsUM2J1z",
    ],
	[
        "judul" => "D.P",
        "genre" => "Action / Thriller",
        "tahun" => 2021,
        "rating" => 8.0,
        "poster" => "https://i.pinimg.com/736x/21/cb/c8/21cbc8a54464df7b0c977319e43ab283.jpg",
        "trailer" => "https://youtu.be/3ArkoIHo7lE?si=GwKNoO6J-qPebW-M",
    ],
	[
        "judul" => "Vigilante",
        "genre" => "Action / Thriller",
        "tahun" => 2023,
        "rating" => 7.7,
        "poster" => "https://i.pinimg.com/736x/ca/13/18/ca131870a508db5baac396065c644619.jpg",
        "trailer" => "https://youtu.be/wXecjX4dIGM?si=qJk2apQdtqc7-P1L",
    ],
	[
        "judul" => "Hometown Cha Cha Cha",
        "genre" => "Romance",
        "tahun" => 2021,
        "rating" => 8.3,
        "poster" => "https://i.pinimg.com/736x/9b/23/bb/9b23bbaa4562f480bf2ed55bf7f0afb7.jpg",
        "trailer" => "https://youtu.be/z66fazyp3-M?si=9szGRTmNuooHmSfh",
    ],
	[
        "judul" => "Moon Lovers: Scarlet Heart Ryeo",
        "genre" => "Fantasi",
        "tahun" => 2016,
        "rating" => 8.6,
        "poster" => "https://i.pinimg.com/736x/9c/98/f9/9c98f9a094e911e86868b24a487c2942.jpg",
        "trailer" => "https://youtu.be/2ljxyaAIphc?si=d-1xhv1Y0rYIjvt2",
    ],
	[
        "judul" => "See You in My 19th Life",
        "genre" => "Fantasi",
        "tahun" => 2023,
        "rating" => 7.7,
        "poster" => "https://i.pinimg.com/736x/a5/bc/bd/a5bcbd2a7b569e205d7cc2a12b1959b5.jpg",
        "trailer" => "https://youtu.be/orAIH67EU-I?si=jAgtuVW74tETvcPP",
    ],
	[
        "judul" => "The Story of Park’s Marriage Contract",
        "genre" => "Fantasi",
        "tahun" => 2023,
        "rating" => 7.5,
        "poster" => "https://i.pinimg.com/736x/bc/9b/50/bc9b50e50de9812691d3fa5e13c5b50e.jpg",
        "trailer" => "https://youtu.be/y1gfhH9jzuE?si=q6wwwEeAxC4AVB8A",
    ],
	[
        "judul" => "A Time Called You",
        "genre" => "Fantasi",
        "tahun" => 2023,
        "rating" => 7.2,
        "poster" => "https://i.pinimg.com/736x/2f/89/61/2f8961ebc10e9bc6ee742b9ef9406bcc.jpg",
        "trailer" => "https://youtu.be/c_sKheuGE7o?si=9La30TyuarYgKbgz",
    ],
	[
        "judul" => "My Perfect Stranger",
        "genre" => "Fantasi",
        "tahun" => 2023,
        "rating" => 6.8,
        "poster" => "https://i.pinimg.com/736x/e0/39/1d/e0391df11492dfbde396a308da157a08.jpg",
        "trailer" => "https://youtu.be/I0KilEDCCCo?si=C-zXGcIDH6AeYUhA",
    ],
	[
        "judul" => "Bloodhounds",
        "genre" => "Action / Thriller",
        "tahun" => 2023,
        "rating" => 8.1,
        "poster" => "https://i.pinimg.com/736x/9e/ea/bb/9eeabb14bcd8302a482e659195b17e4e.jpg",
        "trailer" => "https://youtu.be/eyiR8pO50JE?si=ZwhQQQ8wqqx0uPQb",
    ],
	[
        "judul" => "Shooting Stars ",
        "genre" => "Romance",
        "tahun" => 2022,
        "rating" => 7.9,
        "poster" => "https://i.pinimg.com/736x/7c/a6/b3/7ca6b363d29b70a9fdc1b61b78c2cddf.jpg",
        "trailer" => "https://youtu.be/SjRS8pFwB9A?si=TgaTpvzZPP8WtLgs",
    ],
	[
        "judul" => "Youth of May",
        "genre" => "Romance",
        "tahun" => 2021,
        "rating" => 8.3,
        "poster" => "https://i.pinimg.com/736x/6e/2a/6b/6e2a6bf741a6d759c441872ac195332b.jpg",
        "trailer" => "https://youtu.be/NZPOPMnmBPw?si=F_PqmEbjI9Bvyfvo",
    ],
	[
        "judul" => "High School Return of a Gangster",
		"genre" => "Action / Thriller",
        "tahun" => 2024,
        "rating" => 8.3,
        "poster" => "https://i.pinimg.com/736x/1e/28/1f/1e281f578b3d0e19979987c8a4a4ed5f.jpg",
        "trailer" => "https://youtu.be/c5o74dSF8AM?si=8iP_sEExDc7U68je",
    ],
];	
// Mengelompokkan drama berdasarkan genre
$genres = [];

foreach ($dramas as $drama) {
    $genres[$drama["genre"]][] = $drama;
}

// Menampilkan drama berdasarkan genre
foreach ($genres as $genre => $list) {
    echo "<h2>$genre</h2>";
    foreach ($list as $drama) {
        echo "<div class='drama'>";
        echo "<img src='{$drama["poster"]}' alt='{$drama["judul"]}'>";
        echo "<h3>{$drama["judul"]} ({$drama["tahun"]})</h3>";
        echo "<div class='rating'>Rating: {$drama["rating"]}/10</div>";
        echo "<a class='btn-trailer' href='{$drama["trailer"]}' target='_blank'>Lihat Trailer</a>";
        echo "</div>";
    }
}
?>

</body>
</html>
