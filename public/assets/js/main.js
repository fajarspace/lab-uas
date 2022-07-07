
var autoCloseTimeout;

$('.js-alert').on('click', '.js-force-close', function(e) {
  $(this).parents('.alert').removeClass('is-shown');
  clearTimeout(autoCloseTimeout);
});

// modal example
$('.js-modal-trigger').on('click', function(e) {
  e.preventDefault();
  autoClose({
    target: $('.js-modal'),
    timeout: 2000
  });
});

// alert example
$('.js-alert-trigger').on('click', function(e) {
  e.preventDefault();
  autoClose({
    contextual: 'danger',
    target: $('.js-alert'),
    timeout: 2000
  });
});

/*
* Function to auto close alerts and modals
* Available Options:
*   target(required) [object] - the element to be triggered with an auto close timeout
*   timeout [number] - the number of milliseconds to keep the element open before closing
*   contextual [string] - for alerts, the contextual name to apply to the alert (success, danger, info, warning)
* Note: if content is updated via JS, it must be done prior to calling this function
*/
function autoClose(options) { // eslint-disable-line
  // set defaults
  const defaults = {
    contextual: 'success',
    timeout: 4000
  };
  // apply options
  const $obj = options.target;
  const contextual = options.contextual || defaults.contextual;
  const timeout = options.timeout || defaults.timeout;
  let type = 'modal';

  if ($obj.hasClass('alert')) {
    type = 'alert';
    $obj.removeClass('alert-danger alert-info alert-success alert-warning').addClass('alert-' + contextual);
  }

  // trigger modal or show alert
  type === 'modal' ? $obj.modal('show') : $obj.addClass('is-shown');

  clearTimeout(autoCloseTimeout); // eslint-disable-line

  autoCloseTimeout = setTimeout(function() { // eslint-disable-line
    type === 'modal' ? $obj.modal('hide') : $obj.removeClass('is-shown');
  }, timeout);
}