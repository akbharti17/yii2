$(document).ready(function () {
    window.onload = () => { $('#export').hide(); $("#s").attr("disabled", true); };
    function getUnique(array) {
        var uniqueArray = [];

        for (i = 0; i < array.length; i++) {
            if (uniqueArray.indexOf(array[i]) === -1) {
                uniqueArray.push(array[i]);
            }
        }
        return uniqueArray;
    }


    function unchecked(array, n) {
        const newArray = [];

        for (let i = 0; i < array.length; i++) {
            if (array[i] !== n) {
                newArray.push(parseInt(array[i]));
            }
        }
        return newArray;
    }

    var selectedItems = [];
    var storageitem = [];

    $('input[type=checkbox]').click(function () {

        if ($(this).is(':checked')) {
            $('#export').show();
            selectedItems = $('.grid-view').yiiGridView('getSelectedRows');
            if (localStorage.getItem('item') != null) {
                item = localStorage.getItem('item');
                // ele=parseInt(item);
                ele = item.split(',');
                // console.log(ele);
                let n = ele.length;
                for (var i = 0; i < n; i++) {
                    storageitem.push(parseInt(ele[i]));
                }

                //    console.log(storageitem);
                //    arr=getUnique(storageitem);
                //    console.log(arr);
                newarr = selectedItems.concat(storageitem);
                arr = getUnique(newarr);
                var filtered = arr.filter(x => x);
                console.log(filtered);
                //    console.log(arr);
                // selectedItems.push(ele);
                // console.log(selectedItems);
                // unqarr = getUnique(selectedItems);
                // console.log(arr);
                localStorage.setItem('item', filtered);

            } else {
                localStorage.setItem('item', selectedItems);
            }
        } else {
            $('#export').hide();
            var rmitem = $(this).val();
            item = localStorage.getItem('item');
            arr = item.split(',');
            dataremove = unchecked(arr, rmitem);
            var filtered = dataremove.filter(x => x);
            console.log(filtered);
            // console.log(arr);


            // console.log(filter);
            localStorage.setItem('item', filtered);
            console.log(localStorage.getItem('item'));
        }


    })

    var items = localStorage.getItem('item');
    var array = items.split(",");
    console.log(selectedItems);
    $('input[type=checkbox]').each(function () {
        let num = this.value;
        if (array.includes(num)) {
            $(this).prop('checked', true);
        } else {
            console.log("uncheck");
        }
    })

    // $("#export").click(function(){
    //     $.ajax({
    //         url:"save",
    //         method:"post",
    //         data:{'data':localStorage.getItem('item')},
    //         success:function(data){
    //             // window.location.assign('https://'+window.location.hostname+'/download/'+data);
    //             alert(data);
    //         }
    //     })
    // })
    $("#export").click(function () {
        var str = "http://localhost/Training/advanced/frontend/web/practice/site/save?ids=" + localStorage.getItem('item');
        window.location.href = str;


    })

    // $('.popup-modal').click(function () {
    //     var modal = $('#modal-delete').modal('show');
    // });

    // $('#delete-confirm').click(function () {
    //     var modal = $('#myModal').modal('show');
    // });
    $('.popup-modal').click(function () {
        var modal = $('#modal-delete').modal('show');
    });

    $('#delete-confirm').click(function () {
        var modal = $('#myModal').modal('show');
    });

    $("#in").focusout(function () {
        $("#s").attr("disabled", false);
    })
});




























































































































































































































































































































































