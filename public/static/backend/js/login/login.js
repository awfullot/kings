/**

 * login

 */

$(function(){

    //登陆

    $('body').off('click', '.login');

    $('body').on("click", '.login', function(event){

        var _this = $(this);

        var form = _this.closest('form');

        if(form.length){

            var transmit={

                dataType:'json',

                success:function(data){

                    if(data.status == '1'){

                        toastr.success(data.info);

                        var url = data.url;

                        window.location.href = url;

                    }else{

                        toastr.error(data.info);

                        _this.button('reset');

                    }

                }

            }

            form.ajaxSubmit(transmit);

        }

    });

})