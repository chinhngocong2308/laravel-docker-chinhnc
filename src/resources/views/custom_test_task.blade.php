<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company List Form with Filters</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }
        .filter-section {
            max-width: 600px;
            margin: 0 auto 20px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .filter-section select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        .company-list {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .company-item {
            border-bottom: 1px solid #e0e0e0;
            padding: 15px 0;
        }
        .company-item:last-child {
            border-bottom: none;
        }
        .company-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .company-header h2 {
            margin: 0;
            font-size: 18px;
        }
        .company-follow-button {
            background-color: #0073b1;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
        }
        .company-follow-button:hover {
            background-color: #005f8a;
        }
        .company-details {
            margin-top: 5px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="filter-section">
        <select id="industry-filter">
            <option value="">All Industries</option>
            <option value="IT Services">IT Services</option>
            <option value="Chemical Manufacturing">Chemical Manufacturing</option>
            <option value="Retail Luxury Goods">Retail Luxury Goods</option>
            <option value="Retail">Retail</option>
            <option value="Software Development">Software Development</option>
        </select>
    </div>

    <div class="company-list" id="company-list">
        <div class="company-item" data-industry="IT Services">
            <div class="company-header">
                <h2>Atos IT Solutions and Services A/S</h2>
                <button class="company-follow-button">Follow</button>
            </div>
            <div class="company-details">
                IT Services and IT Consulting - Taastrup<br>
                50K followers
            </div>
        </div>
        <div class="company-item" data-industry="Chemical Manufacturing">
            <div class="company-header">
                <h2>Akkim Kimya Sanayi A.Ş.</h2>
                <button class="company-follow-button">Follow</button>
            </div>
            <div class="company-details">
                Chemical Manufacturing - Istanbul, Gümüşsuyu<br>
                69K followers
            </div>
        </div>
        <div class="company-item" data-industry="Retail Luxury Goods">
            <div class="company-header">
                <h2>A. Lange & Söhne</h2>
                <button class="company-follow-button">Follow</button>
            </div>
            <div class="company-details">
                Retail Luxury Goods and Jewelry - Glashütte<br>
                51K followers
            </div>
        </div>
        <div class="company-item" data-industry="Retail">
            <div class="company-header">
                <h2>Pampered Chef</h2>
                <button class="company-follow-button">Follow</button>
            </div>
            <div class="company-details">
                Retail - Addison, IL<br>
                28K followers
            </div>
        </div>
        <div class="company-item" data-industry="Software Development">
            <div class="company-header">
                <h2>Plan A</h2>
                <button class="company-follow-button">Follow</button>
            </div>
            <div class="company-details">
                Software Development - Berlin<br>
                54K followers
            </div>
        </div>
    </div>

    <script>
        document.getElementById('industry-filter').addEventListener('change', function() {
            const filterValue = this.value;
            const companyItems = document.querySelectorAll('.company-item');

            companyItems.forEach(function(item) {
                if (filterValue === "" || item.getAttribute('data-industry') === filterValue) {
                    item.style.display = "block";
                } else {
                    item.style.display = "none";
                }
            });
        });
    </script>
</body>
</html>
