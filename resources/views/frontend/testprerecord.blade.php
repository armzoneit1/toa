<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		.container {
			display: flex;
			flex-direction: column;
			
			> * {
				margin: 8px;
			}
		}

		button {
			max-width: 300px;
		}
	</style>
</head>
<tbody>
    <div class="container">
		<h1>VOICE RECORDING DEMO FTW, BRO</h1>
		<span>Recorder</span>
		<audio id="recorder" muted hidden></audio>
		<div>
			<button id="start">Record</button>
			<button id="stop">Stop Recording</button>
		</div>
		<span>Saved Recording</span>
		<audio id="player" controls></audio>
		<form id="form" method="post" enctype="multipart/form-data">
			@csrf
			<input type="file" name="recordfile" id="recordfile">
			<button type="submit" class="btn btn-info">Submit</button>
		</form>
	</div>
</tbody>

<script src="https://cdn.jsdelivr.net/npm/@ffmpeg/ffmpeg@0.9.0/dist/ffmpeg.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

<script type="text/javascript">
    $( document ).ready(function() {

        class VoiceRecorder {
            constructor() {
                if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
                    console.log("getUserMedia supported")
                } else {
                    console.log("getUserMedia is not supported on your browser!")
                }

                this.mediaRecorder
                this.stream
                this.chunks = []
                this.isRecording = false

                this.recorderRef = document.querySelector("#recorder")
                this.playerRef = document.querySelector("#player")
                this.startRef = document.querySelector("#start")
                this.stopRef = document.querySelector("#stop")

                this.startRef.onclick = this.startRecording.bind(this)
                this.stopRef.onclick = this.stopRecording.bind(this)

                this.constraints = {
                    audio: true,
                    video: false
                }

            }

            handleSuccess(stream) {
                this.stream = stream
                this.stream.oninactive = () => {
                    console.log("Stream ended!")
                };
                this.recorderRef.srcObject = this.stream
                this.mediaRecorder = new MediaRecorder(this.stream)
                console.log(this.mediaRecorder)
                this.mediaRecorder.ondataavailable = this.onMediaRecorderDataAvailable.bind(this)
                this.mediaRecorder.onstop = this.onMediaRecorderStop.bind(this)
                this.recorderRef.play()
                this.mediaRecorder.start()
            }

            handleError(error) {
                console.log("navigator.getUserMedia error: ", error)
            }

            onMediaRecorderDataAvailable(e) { this.chunks.push(e.data) }

            onMediaRecorderStop(e) {
				const blob = new Blob(this.chunks, { 'type': 'audio/ogg; codecs=opus' });
				const audioFile = new File([blob], 'recording.ogg', { type: 'audio/ogg; codecs=opus' });
				const audioURL = window.URL.createObjectURL(blob);
				this.playerRef.src = audioURL;
				this.chunks = [];
				this.stream.getAudioTracks().forEach(track => track.stop());
				this.stream = null;
				var url = '{{ url("submit_form") }}';
			  	const formData = new FormData();
				formData.append('audio', audioFile, 'recording.ogg');
				formData.append('_token', '{{ csrf_token() }}');
				fetch(url, {
					method: 'POST',
					body: formData
				});
			}

			startRecording() {
				if (this.isRecording) return
				this.isRecording = true
				this.startRef.innerHTML = 'Recording...'
				this.playerRef.src = ''
				navigator.mediaDevices
					.getUserMedia(this.constraints)
					.then(this.handleSuccess.bind(this))
					.catch(this.handleError.bind(this))
			}
			
			stopRecording() {
				if (!this.isRecording) return
				this.isRecording = false
				this.startRef.innerHTML = 'Record'
				this.recorderRef.pause()
				this.mediaRecorder.stop()
			}
			
		}

		window.voiceRecorder = new VoiceRecorder()

		function fetchBlob(blob) {
		  return new Promise(resolve => {
		    const reader = new FileReader();
		    reader.onload = (event) => {
		      resolve(event.target.result);
		    };
		    reader.readAsArrayBuffer(blob);
		  });
		}

	});
</script>
</html>