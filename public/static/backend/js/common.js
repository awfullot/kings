$(function() {
    // $.pjax.defaults.push = false; 用于隐藏地址栏中url 开启后造成搜索返回刷新页面 最好关闭
    $.pjax.defaults.timeout = 5000;
    $.pjax.defaults.maxCacheLength = 0;
    $(document).pjax('a:not(a[target="_blank"])', {
        container: '#pjax-container',
        fragment: '#pjax-container'
    });

    // 所有form表单提交操作
    $('body').off('click', '.submission');
    $('body').on("click", '.submission',
        function(event) {
            var _this = $(this);
            var form = _this.closest('form');
            if (form.length) {
                var transmit = {
                    dataType: 'json',
                    success: function(data) {
                        var data = toAdminJson(data);
                        if (data.status == '1') {
                            toastr.success(data.info);
                            var url = data.url;
                            $.pjax({
                                url: url,
                                container: '#pjax-container',
                                fragment: '#pjax-container'
                            })
                        } else {
                            _this.button('reset');
                            toastr.error(data.info);
                        }
                    }
                }
                form.ajaxSubmit(transmit);
            }
        });

    //搜索
    $(document).on('submit', 'form[pjax-search]',
        function(event) {
            $.pjax.submit(event, {
                container: '#pjax-container',
                fragment: '#pjax-container'
            })
        });

    //状态status列表修改（只能进行0和1值的切换）
    $('body').off('click', 'td a.switch_to');
    $('body').on('click', 'td a.switch_to',
        function(event) {
            var addclass;
            var removeclass;
            var pvalue; //提交值
            var _this = $(this);
            var field = _this.data('field');
            var id = _this.data('id');
            var value = _this.data('value');
            var url = _this.data('url');
            if (value == 1) {
                pvalue = 0;
                addclass = "text-navy";
                removeclass = "text-danger";
            } else {
                pvalue = 1;
                addclass = "text-danger";
                removeclass = "text-navy";
            }
            var dataStr = jQuery.parseJSON('{"id":"' + id + '","' + field + '":"' + pvalue + '"}'); //字符串转json
            $.ajax({
                type: "post",
                url: url,
                dataType: 'json',
                data: dataStr,
                success: function(data) {
                    var data = toAdminJson(data);
                    if (data.status == '1') {
                        _this.data('value', pvalue);
                        _this.removeClass(addclass);
                        _this.addClass(removeclass);
                        _this.text(value ? 'N': 'Y');
                        toastr.success(data.info);
                    } else {
                        toastr.error(data.info);
                    }
                }
            });
        });
    // 返回数据检测登录状态与权限
    var toAdminJson = function(str) {
        var json = {};
        try {
            if (typeof(str) == "object") {
                json = str;
            } else {
                json = eval("(" + str + ")");
            }
            // TODO 此处弹框后跳转
            if (json.status && json.status == '999') {
                toastr.error(json.info);
                return;
            } else if (json.status && json.status == '888') {
                toastr.error(json.info);
                return;
            }
        } catch(e) {
            toastr.error('Jquery 500 Error ...');
            json = {};
        }
        return json;
    };
})