<?php 

    namespace App\Components\Menu;

    use App\Components\Menu\MenuItem;
    use App\Components\Menu\MenuSubItem;
    use App\Components\Menu\MenuSports;
    use App\Components\Menu\MenuSportsItem;

    class Menu {
    
    public static function getMenu() {
        return array(
            // 0 
            'sports1' => new MenuItem(
                    "Yêu thích của tôi",
                    "icon-favorite"
                ),
            
            // 1
            "sports" => new MenuItem(
                    "Thể thao",
                    "icon-sportAll",
                    null,
                    // submenu
                    array(
                        15 => new MenuSubItem(
                                "Number Game",
                                "icon-sport161",
                                "2",
                                true
                            ),
                        16 => new MenuSubItem(
                                "Bóng đá Saba",
                                "icon-sport18x",
                                "50",
                                true,
                                true,
                                '#/saba_game'
                            ),
                        17 => new MenuSubItem(
                                "E-Sports",
                                "icon-sport43",
                                "58",
                                true
                            ),
                        18 => new MenuSubItem(
                                "Bóng rổ",
			                    "icon-sport2",
			                    "45"
                            ),
                        19 => new MenuSubItem(
                                "Bóng chày",
			                    "icon-sport8",
			                    "30"
                            ),
                        20 => new MenuSubItem(
                                "Bóng chày",
			                    "icon-sport8",
			                    "30"
                            ),
                        21 => new MenuSubItem(
                                "Khúc côn cầu trên băng",
			                    "icon-sport4",
			                    "14"
                            ),
                        21 => new MenuSubItem(
                                "Quần vợt",
			                    "icon-sport5",
			                    "5",
			                    true
                            ),
                        22 => new MenuSubItem(
                                "Cầu lông",
			                    "icon-sport9",
			                    "1"
                            ),
                        23 => new MenuSubItem(
                                "Snooker/Pool",
			                    "icon-sport7",
			                    "5"
                            ),
                        24 => new MenuSubItem(
                                "Thể thao Môtô",
    		                    "icon-sport11",
    		                    "4"
                            ),
                        25 => new MenuSubItem(
                                "Đánh Golf",
			                    "icon-sport10",
			                    "4"
                            ),
                        26 => new MenuSubItem(
                                "Cricket",
			                    "icon-sport50",
			                    "5",
			                    true
                            ),
                        27 => new MenuSubItem(
                                "Bóng bầu dục",
			                    "icon-sport26",
			                    "2"
                            ),
                        28 => new MenuSubItem(
                                "Ném phi tiêu",
			                    "icon-sport25",
			                    "5"
                            ),
                        29 => new MenuSubItem(
                                "Bóng bàn",
			                    "icon-sport18",
			                    "6",
			                    true
                            ),
                        30 => new MenuSubItem(
                                "Bóng ném",
			                    "icon-sport24",
			                    "1"
                            ),
                        31 => new MenuSubItem(
                                "Cá Cược Tổng Hợp",
			                    "icon-sportMixparlay",
			                    "38",
			                    true
                            ),
                        32 => new MenuSubItem(
                                "Cược Thắng",
			                    "icon-sportOutright",
			                    "193"
                            ),
                    ),
                    // all sports
                    new MenuSports(
                        3,
                        array(
                        2 => new MenuItem(
                            "Sớm",
                            "icon-calendar",
                            null,
                            null,
                            null
                        ),
                        3 => new MenuItem(
                            "Sự kiện hôm nay",
                            "icon-timer",
                            null,
                            new MenuSportsItem(
                                new MenuSubItem(
                                        "Bóng Đá",
                                        "icon-sport1",
                                        "276",
                                        true
                                    ),
                                array(
                                    5 => new MenuSubItem(
                                        "Kèo Chấp & Tài Xỉu",
                                        "",
                                        "100"
                                    ),
                                    6 => new MenuSubItem(
                                        "Tỉ Lệ 1X2",
                                        "",
                                        "45"
                                    ),
                                    7 => new MenuSubItem(
                                        "Điểm Số Chính Xác",
                                        "",
                                        "23",
                                        false,
                                        false,
                                        '#/correct_score'
                                    ),
                                    8 => new MenuSubItem(
                                        "Lẻ / Chẳn",
                                        "",
                                        "45"                                       
                                    ),
                                    8 => new MenuSubItem(
                                        "Tổng số bàn thắng",
                                        "",
                                        "22"
                                    ),
                                    9 => new MenuSubItem(
                                        "Hiệp 1/Toàn Thời Gian",
                                        "",
                                        "14"
                                    ),
                                    10 => new MenuSubItem(
                                        "Chẵn/Lẻ của Nửa trận/Toàn",
                                        "",
                                        "9"
                                    ),
                                    11 => new MenuSubItem(
                                        "Bàn thắng Đầu/Cuối",
                                        "",
                                        "9"
                                    ),
                                    12 => new MenuSubItem(
                                        "Cá Cược Tổng Hợp",
                                        "",
                                        "15"
                                    ),
                                    13 => new MenuSubItem(
                                        "Cược Thắng",
                                        "",
                                        "176"
                                    )
                                )
                            ),
                            null
                        ),
                        
                        14 => new MenuItem(
                            "Trực tiếp",
                            "icon-runner",
                            null,
                            null,
                            null
                        )
                    )   
                    ),
                    "menu"
                ),
            'sports2' => new MenuItem(
                    "Thể Thao Ảo",
                    "icon-sport18x",
                    null,
                    array(
                            0 => new MenuSubItem(
                                    "Cúp Bóng Đá Euro Ảo",
                                    "icon-sport197",
                                    ""
                                ),
                            1 => new MenuSubItem(
                                    "Cúp bóng đá ảo",
                                    "icon-sport196",
                                    ""
                                ),
                            2 => new MenuSubItem(
                                    "Cúp bóng đá ảo Châu Á",
                                    "icon-sport194",
                                    ""
                                ),
                            3 => new MenuSubItem(
                                    "Giải đấu Bóng đá Ảo",
                                    "icon-sport190",
                                    ""
                                ),
                            4 => new MenuSubItem(
                                    "Giải vô địch bóng đá thế giới ảo",
                                    "icon-sport192",
                                    ""
                                ),
                            5 => new MenuSubItem(
                                    "Quốc gia Bóng đá Ảo",
                                    "icon-sport191",
                                    ""
                                ),
                            5 => new MenuSubItem(
                                    "Bóng rổ Ảo",
                                    "icon-sport193",
                                    ""
                                ),
                            6 => new MenuSubItem(
                                    "Bóng đá Ảo",
                                    "icon-sport180",
                                    ""
                                ),
                            7 => new MenuSubItem(
                                    "Quần Vợt Ảo",
                                    "icon-sport186",
                                    ""
                                ),
                        ),
                    null,
                    "menu"
                ),
            "sports3" => new MenuItem(
                    "Number Game",
                    "icon-sport161",
                    null,
                    array(
                            0 => new MenuSubItem(
                                    "Number Game",
                                    "icon-sport161",
                                    ""
                                ),
                            1 => new MenuSubItem(
                                    "Happy 5",
                                    "icon-sport164",
                                    ""
                                ),
                            2 => new MenuSubItem(
                                    "Parlay 5",
                                    "icon-sport168-1",
                                    ""
                                ),
                            3 => new MenuSubItem(
                                    "Soccer 5",
                                    "icon-sport168-2",
                                    ""
                                )
                        ),
                    null,
                    "menu"
                ),
            "sports4" => new MenuItem(
                    "Thể Thao Điện Tử",
                    "icon-sport43",
                    null,
                    null,
                    null,
                    "link"
                ),
            "sports5" => new MenuItem(
                    "Live Casino",
                    "icon-sportLiveCasino",
                    null,
                    array(
                        0 => new MenuSubItem(
                                "Allbet",
                                "icon-sport211",
                                ""
                            ),
                        1 => new MenuSubItem(
                                "AE Sexy",
                                "icon-sport243",
                                ""
                            ),
                        2 => new MenuSubItem(
                                "WM",
                                "icon-sport233",
                                ""
                            ),
                        3 => new MenuSubItem(
                                "PP Live Casino",
                                "icon-sport170",
                                ""
                            ),
                        4 => new MenuSubItem(
                                "SA Gaming",
                                "icon-sport244",
                                ""
                            ),
                        5 => new MenuSubItem(
                                "GDG",
                                "icon-sport255",
                                ""
                            ),
                        6 => new MenuSubItem(
                                "ION",
                                "icon-sport225",
                                ""
                            )
                        ),
                    null,
                    "menu"
                ),
            "sports6" => new MenuItem(
                "Sòng bạc",
                "icon-sportCasino",
                null,
                array(
                        0 => new MenuSubItem(
                                "Saba Sòng bạc",
                                "icon-sportCasino",
                                null
                            ),
                        1 => new MenuSubItem(
                                "Trò chơi trên bàn",
                                "icon-sport222",
                                null
                            ),
                        2 => new MenuSubItem(
                                "Trò chơi Xèng",
                                "icon-sport251",
                                null
                            ),
                        3 => new MenuSubItem(
                                "Trò chơi Ảo",
                                "icon-sport245",
                                null
                            )
                    ),
                null,
                "menu"
                ),
            "sports7" => new MenuItem(
                    "RNG Keno/Xổ số",
                    "icon-sport202",
                    null,
                    array(
                        0 => new MenuSubItem(
                                "RNG Keno",
                                "icon-sport202",
                                ""
                            ),
                        1 => new MenuSubItem(
                                "MaxGame",
                                "icon-sport237",
                                ""
                            ),
                        2 => new MenuSubItem(
                                "Xổ số",
                                "icon-sport220",
                                ""
                            ),
                        3 => new MenuSubItem(
                                "Trò chơi trên bàn",
                                "icon-sport222",
                                ""
                            ),
                        4 => new MenuSubItem(
                                "RNG War",
                                "icon-sport224",
                                ""
                            ),
                        5 => new MenuSubItem(
                                "Lô Đề",
                                "icon-sport213",
                                ""
                            ),
                        6 => new MenuSubItem(
                                "Lottoworld",
                                "icon-sport165",
                                ""
                            ),
                        7 => new MenuSubItem(
                                "Xổ số Bóng đá",
                                "icon-sport169",
                                ""
                            )
                        ),
                    null,
                    "menu"
                ),
            "sports8" => new MenuItem(
                    "Cổng Game SABA",
                    "icon-sport200",
                    null,
                    null,
                    null,
                    "sabagame"
                )
        );
    }
  }
