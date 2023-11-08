<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <style>
        #videoElement {
            width: 500px;
            height: 375px;
            border: 2px ridge #885df1;
            border-radius: 20px;
            box-shadow: 10px 10px 18px rgba(0, 0, 0, 0.3), 10px 10px 18px rgba(0, 0, 0, 0.3), -8px -9px 18px rgba(0, 0, 0, 0.3);
        }

        #webcamContainer {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: none;
            z-index: 9999;
        }

        #closeBtn {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        #captureBtn {
            display: none;
        }

        #captureBtn {
            text-align: center;
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
        }

        img.captureimg {
            width: 52px;
        }
    </style>
</head>

<body>
    <h1>Webcam Capture</h1>
    <img id="profileimagepreview" src="https://analysishms.com/admin/images/preview.gif" alt="Initial Image" width="180" height="180">
    <br>
    <button class="mt-2 btn-outline-secondary" id="openWebcamBtn" onclick="startWebcam('profileimagepreview', 'openWebcamBtn', 'webcamContainer', 'closeBtn', 'videoElement', 'captureBtn', 'capturedImageCanvas')">Open Webcam</button>
    <br>
    <canvas id="capturedImageCanvas" style="display: none;"></canvas>

    <!-- Bootstrap video element -->
    <div class="container-fluid no-padding">
        <div id="webcamContainer" class="video-container">
            <video autoplay="true" id="videoElement" class="embed-responsive embed-responsive-4by3"></video>
            <button id="closeBtn" class="btn"><i class="fa-solid fa-xmark"></i></button>
            <button id="captureBtn" class="btn">
                <img class="img-fluid captureimg" src="images/camera.svg" alt="camera"></button>
        </div>
    </div>

    <script>
        function startWebcam(imagefirst, openWebcamBtn, webcamContainer, closeBtn, videoElement, captureBtn, capturedImageCanvas) {
            var initialImage = document.getElementById(imagefirst);
            var openWebcamBtn = document.getElementById(openWebcamBtn);
            var webcamContainer = document.getElementById(webcamContainer);
            var closeBtn = document.getElementById(closeBtn);
            var webcam = document.getElementById(videoElement);
            var captureBtn = document.getElementById(captureBtn);
            var capturedImageCanvas = document.getElementById(capturedImageCanvas);
            const ctx = capturedImageCanvas.getContext('2d');

            async function openWebcam() {
                try {
                    const stream = await navigator.mediaDevices.getUserMedia({
                        video: true
                    });
                    webcam.srcObject = stream;
                    webcamContainer.style.display = 'block';
                    webcam.play();
                    captureBtn.style.display = 'block';
                } catch (error) {
                    console.error('Error accessing the webcam: ', error);
                }
            }

            captureBtn.addEventListener('click', () => {
                capturedImageCanvas.width = webcam.videoWidth;
                capturedImageCanvas.height = webcam.videoHeight;
                ctx.clearRect(0, 0, capturedImageCanvas.width, capturedImageCanvas.height);
                ctx.drawImage(webcam, 0, 0, webcam.videoWidth, webcam.videoHeight);
                initialImage.src = capturedImageCanvas.toDataURL();
                webcam.srcObject.getTracks().forEach(track => track.stop());
                webcamContainer.style.display = 'none';
                captureBtn.style.display = 'none';
                openWebcamBtn.style.display = 'block';
            });


            closeBtn.addEventListener('click', () => {
                webcam.srcObject.getTracks().forEach(track => track.stop());
                webcamContainer.style.display = 'none';
                captureBtn.style.display = 'none';
                openWebcamBtn.style.display = 'block';
            });

            openWebcam();
        }
    </script>
</body>

</html>
