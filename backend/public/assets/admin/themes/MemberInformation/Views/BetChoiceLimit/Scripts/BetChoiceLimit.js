var MemberInformation = MemberInformation || {}

MemberInformation.BetChoiceLimit = (function ($) {
    var $form;
    var $product, $betType;

    function reloadData() {
        $form.submit();
    }

    function init() {
        $form = $("#bet-choice-limit-form");
        $product = $("#page_main #product");
        $betType = $("#page_main #bet-type");

        $product.change(reloadData);
        $betType.change(reloadData);
    }

    return{
        init: init
    };
})(jQuery);

$(document).ready(function () {
    MemberInformation.BetChoiceLimit.init();
});
