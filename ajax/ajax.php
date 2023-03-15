    <?php
    $nationalFruits = array(
        "Japan" => "persimmon",
        "Spain" => "orange",
        "Mexico" => "avocado",
        "Colombia" => "guava",
        "Russia" => "apple",
        "Greece" => "olive",
        "India" => "mango",
        "Peru" => "lucuma",
        "Malaysia" => "papaya",
        "Indonesia" => "durian",
        "New Zealand" => "kiwifruit",
        "Italy" => "lemon",
        "Vietnam" => "dragon fruit",
        "Egypt" => "fig",
        "Thailand" => "mangosteen",
        "Iran" => "pomegranate",
        "Brazil" => "pineapple"
    );
    $national_fruits = json_encode($nationalFruits);
    header('Content-Type: application/json');
    echo "$national_fruits";

    ?>
    