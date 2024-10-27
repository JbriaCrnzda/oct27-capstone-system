<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kween P Sports</title>
    <!-- tailwind css cdn -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="images/headlogo.png"  type="image/x-icon">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Red+Hat+Display:wght@500;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        #model-container {
            width: 100%;
            height: 500px;
            border: 2px solid gray;
            background-color: lightgray;
            overflow: hidden;
        }
    </style>
</head>
 
<body class="bg-gray-100">
<nav class="bg-black shadow-md top-0 left-0 w-full z-50">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-2">
            <div class="flex-1 flex justify-start">
                <div class="hidden md:flex space-x-4 p-2">
                    <a href="index.php" class="text-white tracking-wider px-4 xl:px-8 py-2 text-lg hover:underline">Home</a>
                    
                    <a href="#about" class="text-white tracking-wider px-4 xl:px-8 py-2 text-lg hover:underline">About</a>
                    <a href="#threats" class="text-white tracking-wider px-4 xl:px-8 py-2 text-lg hover:underline">Services</a>
                </div>
            </div>
            <div class="flex-1 flex justify-center">
                <div class="text-center">
                    <img src="images/logo1.png" alt="" width="200px" class="h-20">  
                </div>
            </div>
            <div class="flex-1 flex justify-end">
                <div class="hidden md:flex space-x-4 p-2">
                    
                    <a href="contacts.html" class="text-white tracking-wider px-4 xl:px-8 py-2 text-lg hover:underline">Contacts</a>
                    <a href="order_history.php" class="text-gray-700 px-2 py-1 font-abhaya-libre uppercase text-white tracking-wider px-4 xl:px-8 py-2 text-sm hover:underline">History Order</a>
                    <a href="logout.php"><button type="submit" class="block font-bold bg-orange-400 text-white py-2 px-6 rounded hover:bg-orange-300 transition">Logout</button></a>
                </div>
            </div>
            <!-- Hamburger Button for Mobile View -->
            <div class="md:hidden flex items-center">
                <button id="navbar-toggle" class="text-white focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div id="navbar-menu" class="navbar-menu md:hidden hidden">
        <a href="#Main" class="block px-4 py-2 text-white hover:bg-gray-700">Home</a>
        <a href="#varieties" class="block px-4 py-2 text-white hover:bg-gray-700">Sports</a>
        <a href="#about" class="block px-4 py-2 text-white hover:bg-gray-700">About</a>
        <a href="contacts.html" class="block px-4 py-2 text-white hover:bg-gray-700">Contacts</a>
    </div>
</nav>

<!-- Navbar Script -->
<script>
    document.getElementById('navbar-toggle').addEventListener('click', function() {
        var menu = document.getElementById('navbar-menu');
        menu.classList.toggle('hidden'); // Toggle the 'hidden' class
    });
</script> 
    </header>
 
    <main class="flex flex-col items-center justify-center py-10">
        <div class="w-full max-w-4xl bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-4">Customize Your Model</h2>
            <div id="model-container"></div>
           
            <!-- Text Input Field -->
            <div class="flex items-center mt-4">
                <label for="textInput" class="mr-2">Enter Text:</label>
                <input type="text" id="textInput" class="border rounded px-2 py-1" placeholder="Your Text Here" />
                <button class="bg-yellow-500 text-white px-4 py-2 rounded ml-4 hover:bg-blue-600" id="updateTextBtn">Update Text</button>
            </div>
           
            <div class="flex justify-around items-center mt-4">
                <div class="flex items-center">
                    <label for="colorPicker" class="mr-2">Choose Color:</label>
                    <input type="color" id="colorPicker" class="border rounded" />
                </div>
                <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600" id="resetBtn">Reset</button>
                <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600" id="saveBtn">Save</button>
            </div>
        </div>
    </main>
 
    <footer class="bg-gray-800 text-white text-center p-4 mt-10">
        <p>&copy; 2024 Your Company. All rights reserved.</p>
    </footer>
 
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/build/three.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/loaders/GLTFLoader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/controls/OrbitControls.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/exporters/GLTFExporter.js"></script>
    <script>
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({
            antialias: true
        });
        const container = document.getElementById('model-container');
 
        renderer.setSize(container.clientWidth, container.clientHeight);
        container.appendChild(renderer.domElement);
 
        const ambientLight = new THREE.AmbientLight(0xffffff, 0.5);
        scene.add(ambientLight);
 
        const directionalLight = new THREE.DirectionalLight(0xffffff, 1);
        directionalLight.position.set(5, 5, 5);
        scene.add(directionalLight);
 
        const directionalLight2 = new THREE.DirectionalLight(0xffffff, 1);
        directionalLight2.position.set(-5, -5, -5);
        scene.add(directionalLight2);
 
        let model;
 
        const loader = new THREE.GLTFLoader();
        loader.load('models/tshirt.glb', (gltf) => {
            model = gltf.scene;
            model.scale.set(0.5, 0.5, 0.5);
            scene.add(model);
 
            const box = new THREE.Box3().setFromObject(model);
            const center = box.getCenter(new THREE.Vector3());
            model.position.set(-center.x, -center.y, 0);
            model.position.y += model.scale.y * (box.max.y - box.min.y) / 5;
 
            model.traverse((child) => {
                if (child.isMesh) {
                    child.material = new THREE.MeshStandardMaterial({
                        color: 0xffffff,
                        metalness: 0.5,
                        roughness: 0.5
                    });
                }
            });
 
            camera.position.z = Math.max(box.max.x, box.max.y, box.max.z) * 1.3;
        }, undefined, (error) => {
            console.error('Error loading model:', error);
        });
 
        const controls = new THREE.OrbitControls(camera, renderer.domElement);
        controls.enableDamping = true;
        controls.dampingFactor = 0.25;
        controls.screenSpacePanning = false;
        controls.maxPolarAngle = Math.PI / 2;
 
        const animate = function() {
            requestAnimationFrame(animate);
            controls.update();
            renderer.render(scene, camera);
        };
        animate();
 
        const colorPicker = document.getElementById('colorPicker');
        colorPicker.addEventListener('input', (event) => {
            const selectedColor = event.target.value;
            scene.traverse((child) => {
                if (child.isMesh) {
                    child.material.color.set(selectedColor);
                }
            });
        });
 
        document.getElementById('resetBtn').addEventListener('click', () => {
            colorPicker.value = '#ffffff';
            scene.traverse((child) => {
                if (child.isMesh) {
                    child.material.color.set(0xffffff);
                }
            });
        });
 
        document.getElementById('saveBtn').addEventListener('click', () => {
            const exporter = new THREE.GLTFExporter();
            exporter.parse(scene, (result) => {
                const blob = new Blob([result], {
                    type: 'application/octet-stream'
                });
                const link = document.createElement('a');
                link.href = URL.createObjectURL(blob);
                link.download = 'custom_model.glb';
                link.click();
            }, {
                binary: true
            });
        });
 
        window.addEventListener('resize', () => {
            const width = container.clientWidth;
            const height = container.clientHeight;
 
            renderer.setSize(width, height);
            camera.aspect = width / height;
            camera.updateProjectionMatrix();
        });
 
        // Function to update the texture on the model with the text
        function updateTextOnModel(text) {
            const canvas = document.createElement('canvas');
            const context = canvas.getContext('2d');
            canvas.width = 512;
            canvas.height = 512;
 
            // Set the background color (optional)
            context.fillStyle = 'white';
            context.fillRect(0, 0, canvas.width, canvas.height);
 
            // Set the text properties
            context.font = 'bold 48px Arial';
            context.fillStyle = 'black';
            context.textAlign = 'center';
            context.textBaseline = 'middle';
            context.fillText(text, canvas.width / 2, canvas.height / 2);
 
            // Create the texture from the canvas
            const texture = new THREE.CanvasTexture(canvas);
 
            // Apply the texture to the model
            model.traverse((child) => {
                if (child.isMesh) {
                    child.material.map = texture; // Apply the texture to the material's map property
                    child.material.needsUpdate = true; // Update the material
                }
            });
        }
 
        // Event listener for updating the text
        document.getElementById('updateTextBtn').addEventListener('click', () => {
            const userText = document.getElementById('textInput').value;
            updateTextOnModel(userText);
        });
 
    </script>
</body>
 
</html>
 