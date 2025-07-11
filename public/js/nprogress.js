/*
*@author  [EazZy Project]
* @copyright Copyright (c) [2025] [EazZy Project]
* @license   https://opensource.org/licenses/MIT MIT License
*/

// Pastikan NProgress sudah dimuat sebelum menjalankan kode ini
if (typeof NProgress !== 'undefined') {

    const startButton = document.getElementById('startButton');
    const doneButton = document.getElementById('doneButton');

    if (startButton && doneButton) {
        startButton.addEventListener('click', () => {
            // Memulai progress bar
            NProgress.start();
        });

        doneButton.addEventListener('click', () => {
            // Menghentikan progress bar
            NProgress.done();
        });
    }

} else {
    console.error('NProgress library not found. Make sure it is loaded correctly.');
}