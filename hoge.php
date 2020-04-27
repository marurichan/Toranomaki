配列とは
fruits = [
    'メロン',
    'りんご',
    'いちご',
    'みかん'
];
取り出し方：echo fruits[2];

多次元配列
fruits = [
    [
        'メロン',
        '緑',
        '200円'
    ],
    [
        'りんご',
        '赤',
        '100円'
    ],
    [
        'いちご',
        '赤',
        '300円'
    ],
    [
        'みかん',
        'おれんじ',
        '50円'
    ]
];
取り出し方：いちごの色を取り出す時：echo fruits[2][1];
メリット：１つの変数の中にいろんな値を格納することができる。
デメリット：順番で管理されているため、取り出す時に分かりづらい。



連想配列
fruits = {
    'メロン' => {
        '色' => '緑',
        '値段' => '200円'
    },
    'りんご' => {
        '色' => '赤',
        '値段' => '100円'
    },
    'いちご' => {
        '色' => '赤',
        '値段' => '300円'
    },
    'みかん' => {
        '色' => 'おれんじ',
        '値段' => '50円'
    }
};
取り出し方：いちごの色を取り出す時：echo fruits['いちご']['値段']
メリット：取り出す時のリテラルが直感的で分かりやすい。
デメリット：書くのが大変


オブジェクト指向
class Fruits {
    private $name;
    private $color;
    private $price;
    public function __construct($name, $color, $price)
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
    }
}
fruits1 = new Fruits('メロン', '緑', '200円');
fruits2 = new Fruits('りんご', '赤', '100円');
fruits3 = new Fruits('いちご', '赤', '300円');
fruits4 = new Fruits('みかん', 'おれんじ', '50円');

fruits1 = {
    'name' => 'メロン',
    'color' => '緑',
    'price' => '200円'
}
fruits2 = {
    'name' => 'りんご',
    'color' => '赤',
    'price' => '100円'
}
fruits3 = {
    'name' => 'いちご',
    'color' => '赤',
    'price' => '300円'
}
fruits4 = {
    'name' => 'みかん',
    'color' => 'おれんじ',
    'price' => '50円'
}