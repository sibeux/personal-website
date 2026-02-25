async function playSong() {
    var url = document.getElementById("song-url").value;
    var audioPlayer = document.getElementById("audio-player");

    if (url) {
        /***
         * pokoknya kalau pakai method yang ada fetch gitu2,
         * harus pakai async await, karena fetch itu asynchronous
         ***/
        audioPlayer.src = await checkUrlFromDrive(url);
        audioPlayer.play();
    } else {
        alert("Silakan masukkan URL lagu.");
    }
}

function checkUrlFromDrive(urlDb) {
    return fetch(
        "https://cybeat.sibeux.my.id/cloud-music-player/database/mobile-music-player/api/gdrive_api"
    )
        .then((response) => response.json())
        .then((apiData) => {
            // Filter data yang email mengandung '@gmail.com'
            const gmailData = apiData.filter((item) =>
                item.email.includes("@gmail.com")
            );

            if (gmailData.length === 0) {
                console.warn("No Gmail API key found, using default.");
                return urlDb;
            }

            // Random pilih satu API key dari gmailData
            const randomIndex = Math.floor(Math.random() * gmailData.length);
            const gdriveApiKey = gmailData[randomIndex].gdrive_api;

            if (urlDb.includes("drive.google.com")) {
                const matches = urlDb.match(/\/d\/([a-zA-Z0-9_-]+)/);
                if (matches && matches[1]) {
                    return `https://www.googleapis.com/drive/v3/files/${matches[1]}?alt=media&key=${gdriveApiKey}`;
                }
            }

            return urlDb;
        })
        .catch((error) => {
            console.error("Error fetching Google Drive API key:", error);
            return urlDb;
        });
}
