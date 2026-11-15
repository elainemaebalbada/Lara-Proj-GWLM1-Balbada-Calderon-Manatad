//LIGHT / DARK MODE
const themeToggle = document.getElementById('theme-toggle');
const themeLabel = document.getElementById('theme-label');
const html = document.documentElement;

// Apply the saved theme when the page loads
const savedTheme = localStorage.getItem('snappyboo-theme') || 'light';

html.setAttribute('data-theme', savedTheme);
updateThemeLabel(savedTheme);

// Toggle between light and dark themes
themeToggle.addEventListener('click', function () {
    const currentTheme = html.getAttribute('data-theme');

    const newTheme = currentTheme === 'light' ? 'dark' : 'light';

    // Apply the selected theme
    html.setAttribute('data-theme', newTheme);

    // Save the user's preference
    localStorage.setItem('snappyboo-theme', newTheme);

    // Update the button label
    updateThemeLabel(newTheme);
});

// Update the button text
function updateThemeLabel(theme) {
    themeLabel.textContent = theme === 'light'
        ? 'Dark Mode'
        : 'Light Mode';
}
