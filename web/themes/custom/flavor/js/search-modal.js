/**
 * @file
 * Search modal behavior.
 */

(({ behaviors }) => {
  behaviors.flavorSearchModal = {
    attach(context) {
      const triggers = once('search-modal', '.search-modal__trigger', context);

      triggers.forEach((trigger) => {
        const block = trigger.closest('.block');
        const dialog = block.querySelector('.search-modal__dialog');
        const closeBtn = dialog.querySelector('.search-modal__close');

        trigger.addEventListener('click', () => {
          dialog.showModal();
        });

        closeBtn.addEventListener('click', () => {
          dialog.close();
        });

        dialog.addEventListener('click', (e) => {
          if (e.target === dialog) {
            dialog.close();
          }
        });
      });
    },
  };
})(Drupal);
