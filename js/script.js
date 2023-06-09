const selectElement = document.getElementById('regio');
selectElement.addEventListener('change', () => {
    const selectedValue = selectElement.value;
    const baseUrl = window.location.href.split('?')[0]; // Remove existing query parameters if any
    const newUrl = `${baseUrl}?regio=${encodeURIComponent(selectedValue)}`;
    window.location.href = newUrl;
})