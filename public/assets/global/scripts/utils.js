function checkAllInTable(checkedObject, checkedClass) {
    var _checked = $(checkedObject).prop('checked');
    var _table = $(checkedObject).closest('table');
    $('input.' + checkedClass, _table).prop('checked', _checked);
}

function entityEditable(button) {
    var container = $(button).closest('.entities-container')[0];
    $('.show-input-value', $(container)).removeClass('hide');
    $('.show-value-cell', $(container)).addClass('hide');
    $('.button-container', $(container)).removeClass('hide');
}

function cancelEntitiesEditting(button) {
    var form = $(button).closest("form")[0];
    var container = $(button).closest('.entities-container');
    form.reset();
    $('.show-input-value', $(container)).addClass('hide');
    $('.show-value-cell', $(container)).removeClass('hide');
    $('.button-container', $(container)).addClass('hide');
}

function submitEntityForm(button) {
    var form = $(button).closest("form")[0];
    form.submit();
}

function submitObjectAndEditEntities(button) {
    var form = $(button).closest("form")[0];
    $(form).attr('action', $(button).attr('link'));
    $(form).submit();
}