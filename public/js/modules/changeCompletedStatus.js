$(function() {

    var inputBox = $('.checkboxInput');

    inputBox.on('change', function() {

        var item = $(this).parents().eq(3).children();

        // console.log(item);
        var categoryId = $(this).parents().eq(3).data('category');
        var priority = item.eq(1).data('priority');
        var deadline = item.eq(2).children().eq(0).html();
        var name = item.eq(2).children().eq(1).html();
        // console.log(name);
        var body = item.eq(2).children().eq(2).html();
        var completed = parseInt($(this).val()) ? 0 : 1;

        // console.log(deadline);
        // console.log(body);

        var url = 'tasks/' + $(this).data('id');
        // console.log($(this).data('id'));

        var data = {
            'priority': priority,
            'deadline': deadline,
            'name': name,
            'body': body,
            'completed': completed,
            'category_id': categoryId

        };

        axios.put(url, data)
            .then(function (response) {
                // console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            });
    });

})