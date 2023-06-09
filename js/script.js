
const selectElement = document.getElementById('regio');
selectElement.addEventListener('change', () => {
    const selectedValue = selectElement.value;
    const currentUrl = window.location.href;
    const baseUrl = currentUrl.split('?')[0]; // Remove existing query parameters if any
    const newUrl = `${baseUrl}?regio=${encodeURIComponent(selectedValue)}`;
    window.history.pushState({ path: newUrl }, '', newUrl);
});
