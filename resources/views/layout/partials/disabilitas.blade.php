<button onclick="toggleAccessibilityFeatures()">Buka Fitur Disabilitas</button>

<div id="accessibilityFeatures" style="display: none;">
    <!-- Konten Fitur Disabilitas -->
    <!-- Misalnya: -->
    <label for="highContrast">Kontras Tinggi</label>
    <input type="checkbox" id="highContrast">
</div>

<script>
    function toggleAccessibilityFeatures() {
        var accessibilityDiv = document.getElementById('accessibilityFeatures');
        if (accessibilityDiv.style.display === 'none') {
            accessibilityDiv.style.display = 'block';
        } else {
            accessibilityDiv.style.display = 'none';
        }
    }
</script>
