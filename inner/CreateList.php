<?php include '../sections/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Listing</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background: #f0f0f0;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 20px;
        }
        .container {
            display: flex;
            width: 90%;
            max-width: 1200px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .sidebar {
            width: 300px;
            padding: 20px;
            border-right: 1px solid #e0e0e0;
        }
        .photo-upload {
            width: 100%;
            height: 200px;
            background: #f0f0f0;
            border: 2px dashed #ccc;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            margin-bottom: 20px;
            position: relative;
        }
        .photo-upload::before {
            content: '+';
            font-size: 50px;
            color: #999;
        }
        .photo-upload input {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }
        .input-group {
            margin-bottom: 15px;
        }
        .input-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
        .input-box {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .preview-section {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }
        .preview-content {
            flex: 1;
            border: 1px solid #e0e0e0;
            display: flex;
            flex-direction: column;
        }
        .preview-image {
            max-width: 100%;
            max-height: 400px;
            object-fit: cover;
            background: #f0f0f0;
        }
        .create-list-btn {
            background: #ff9800;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 15px;
            transition: background 0.3s ease;
        }
        .create-list-btn:hover {
            background: #f57c00;
        }
        .preview-details {
            padding: 15px;
        }
        .preview-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #e0e0e0;
        }
        .user-info {
            display: flex;
            align-items: center;
        }
        .user-info img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h3>Creating New Listing</h3>
            <div class="photo-upload" id="photoUpload">
                <input type="file" accept="image/*" id="fileInput">
            </div>
            <p>Add Photos</p>
            <div class="input-group">
                <label for="title">Title</label>
                <input type="text" id="title" class="input-box" placeholder="Enter title">
            </div>
            <div class="input-group">
                <label for="price">Price</label>
                <input type="text" id="price" class="input-box" placeholder="Enter price">
            </div>
            <div class="input-group">
                <label for="description">Description</label>
                <textarea id="description" class="input-box" placeholder="Enter description" rows="4"></textarea>
            </div>
            <button class="create-list-btn" id="createListBtn">Create List</button>
        </div>
        <div class="preview-section">
            <h2>Preview</h2>
            <div class="preview-content">
                <div class="preview-header">
                    <div class="user-info">
                        <img src="/api/placeholder/40/40" alt="User profile">
                        <span id="previewUserName">Vhencin G.</span>
                    </div>
                </div>
                <img src="/api/placeholder/600/400" alt="Listing Preview" class="preview-image" id="previewImage">
                <div class="preview-details">
                    <h3 id="previewTitle">Title</h3>
                    <p id="previewPrice">Price</p>
                    <p id="previewDescription">Description</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('title').addEventListener('input', function() {
            document.getElementById('previewTitle').textContent = this.value || 'Title';
        });

        document.getElementById('price').addEventListener('input', function() {
            document.getElementById('previewPrice').textContent = this.value || 'Price';
        });

        document.getElementById('description').addEventListener('input', function() {
            document.getElementById('previewDescription').textContent = this.value || 'Description';
        });

        document.getElementById('fileInput').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('previewImage').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });


        document.getElementById('createListBtn').addEventListener('click', function() {
            const listingData = {
                title: document.getElementById('title').value,
                price: document.getElementById('price').value,
                description: document.getElementById('description').value,
                image: document.getElementById('previewImage').src
            };
            console.log('Listing Data:', listingData);
            alert('Listing created! (Check console for details)');
        });
    </script>
</body>
</html>