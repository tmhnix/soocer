define(['backbone'], function (Backbone) {
	var BannerItem = Backbone.Model.extend({
        defaults: {
            KeyId: '',
            name: '',
            Img: '',
            navigateKey: '',
            enable: 1
        },
        idAttribute: "KeyId",
    });
	
	var ctlVer = require.s.contexts._.config.urlArgs;
	// bong88
	var ProductSettingList = [
        { KeyId: 's1', name: 'lbl_Sports', Img: "sports", navigateKey: "Sports/s=0", Loading: true, enable: 1 },
        { KeyId: 'f1', name: 'lbl_fastmarkets', Img: "fastmarket", navigateKey: "Sports/FastMarket/", Loading: true, enable: 1 },    
        { KeyId: 'b1', name: 'lbl_2', Img: "basketball", navigateKey: "Sports/s=2", Loading: true, enable: 1 },
		{ KeyId: 'e1', name: 'lbl_ESports', Img: "esports", navigateKey: "Sports/s=43", Loading: true, enable: 1 },
		{ KeyId: 't1', name: 'lbl_5', Img: "tennis", navigateKey: "Sports/s=5", Loading: true, enable: 1 },
		{ KeyId: 'b2', name: 'lbl_9', Img: "badminton", navigateKey: "Sports/s=9", Loading: true, enable: 1 },
		{ KeyId: 'b3', name: 'lbl_8', Img: "baseball", navigateKey: "Sports/s=8", Loading: true, enable: 1 },
		{ KeyId: 'cricket', name: 'lbl_27', Img: "cricket", navigateKey: "Sports/s=50", Loading: true, enable: 1 },
		{ KeyId: 'v3', name: 'lbl_6', Img: "volleyball", navigateKey: "Sports/s=6", Loading: true, enable: 1 }
    ];
	
    // viva88
    var LProductSettingList = [
        { KeyId: 's1', name: 'soccer', Img: "soccer", icon: "iconthin-sport1", navigateKey: "Sports/s=0", Loading: true, enable: 1 },
        { KeyId: 'e1', name: 'eSport', Img: "esports", icon: "iconthin-sport43", navigateKey: "Sports/s=43", Loading: true, enable: 1 },
        { KeyId: 'n1', name: 'numberGame', Img: "numbergame", icon: "iconthin-sport161", navigateKey: "Sports/s=161", Loading: true, enable: 1 },
        { KeyId: 'b1', name: 'basketball', Img: "basketball", icon: "iconthin-sport2", navigateKey: "Sports/s=2", Loading: true, enable: 1 },
        { KeyId: 'b3', name: 'baseball', Img: "baseball", icon: "iconthin-sport8", navigateKey: "Sports/s=8", Loading: true, enable: 1 },
        { KeyId: 'v1', name: 'virtualSports', Img: "virtuals", icon: "iconthin-sport180", navigateKey: "Sports/s=180", Loading: true, enable: 1 },
        { KeyId: 'c1', name: 'gaming', Img: "gaming", icon: "iconthin-sport211", navigateKey: "cl", Loading: false, enable: 1, actType: "c1" },
        { KeyId: 'k1', name: 'keno', Img: "keno", icon: "iconthin-sport202", navigateKey: "keno", Loading: false, enable: 1, actType: "k1" }
    ];

    // viva88
    var TopMenuList = [
        { KeyId: 's1', name: "soccer", nav: "Sports/s=0", enable: 1 },
        { KeyId: 'v1', name: "virtualSports", nav: "Sports/s=180", enable: 1 },
        { KeyId: 'e1', name: "eSport", nav: "Sports/s=43", enable: 1 },
        { KeyId: 'n1', name: "numberGame", nav: "Sports/s=161", enable: 1 },
        { KeyId: 'c1', name: "gaming", nav: "cl", enable: 1, actType: "c1" },
        { KeyId: 'k1', name: "keno", nav: "keno", enable: 1, actType: "k1" }
    ];

    // nova88
    var CProductSettingList = [
        { KeyId: 's1', name: 'soccer', Img: "Content/" + window._skinPath + "/images/login/product_soccer.jpg?" + ctlVer, icon: "iconthin-sport1", navigateKey: "Sports/s=0", enable: 1 },
        { KeyId: 'e1', name: 'eSport', Img: "Content/" + window._skinPath + "/images/login/product_es.jpg?" + ctlVer, icon: "iconthin-sport43", navigateKey: "Sports/s=43", enable: 1 },
        { KeyId: 't1', name: 'tennis', Img: "Content/" + window._skinPath + "/images/login/product_tennis.jpg?" + ctlVer, icon: "iconthin-sport5", navigateKey: "Sports/s=5", enable: 1 },
        { KeyId: 'b1', name: 'basketball', Img: "Content/" + window._skinPath + "/images/login/product_basketball.jpg?" + ctlVer, icon: "iconthin-sport2", navigateKey: "Sports/s=2", enable: 1 },
        { KeyId: 'b3', name: 'baseball', Img: "Content/" + window._skinPath + "/images/login/product_baseball.jpg?" + ctlVer, icon: "iconthin-sport8", navigateKey: "Sports/s=8", enable: 1 }
    ];

    // nova88
    var FeaturesList = [
        { KeyId: 's1', name: 'sports', Img: "is-sports", navigateKey: "Sports/s=0", enable: 1 },
        { KeyId: 'mul', name: 'multi', Img: "is-multi", navigateKey: "", enable: 1 },
        { KeyId: 'v1', name: 'virtaulSport', Img: "is-vs", navigateKey: "Sports/s=180", enable: 1 },
        { KeyId: 'k1', name: 'keno', Img: "is-keno", navigateKey: "", enable: 1, actType: "k1" },
        { KeyId: 'c1', name: 'gaming', Img: "is-gaming", navigateKey: "", enable: 1, actType: "c1" },
        { KeyId: 'n1', name: 'numberGame', Img: "is-ng", navigateKey: "Sports/s=161", enable: 1 }
    ]

    var ProductList = Backbone.Collection.extend({
        model: BannerItem
    });
	
	var ProductCollection = new ProductList();
    ProductCollection.add(ProductSettingList);

    var LProductCollection = new ProductList();
    LProductCollection.add(LProductSettingList);

    var TopMenuCollection = new ProductList();
    TopMenuCollection.add(TopMenuList);

    var CProductCollection = new ProductList();
    CProductCollection.add(CProductSettingList);

    var FeaturesCollection = new ProductList();
    FeaturesCollection.add(FeaturesList);

    return {
		ProductCollection: ProductCollection,
        LProductCollection: LProductCollection,
        TopMenuCollection: TopMenuCollection,
        CProductCollection: CProductCollection,
        FeaturesCollection: FeaturesCollection
    };

});