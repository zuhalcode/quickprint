const form = document.querySelector('form'),
    content = document.querySelector('.dashed-content'),
    fileInput = form.querySelector('.file-input'),
    progressArea = document.querySelector('.progress-area'),
    uploadedArea = document.querySelector('.uploaded-area');

content.addEventListener('click', () => {
    fileInput.click();
})

fileInput.onchange = ({
    target
}) => {
    let file = target.files[0];
    let fileName = file.name;
    if (file) {
        let splitName = fileName.split('.');
        fileName = splitName[0].substring(0, 12) + '... .' + splitName[1];
    }
    uploadFile(fileName);
}

function uploadFile(name) {
    let xhr = new XMLHttpRequest()
    xhr.open('POST', 'http://localhost:8080/phpCode/quicknext/public/auth/upload')
    xhr.upload.addEventListener('progress', ({
        loaded,
        total
    }) => {
        let fileLoaded = Math.floor((loaded / total) * 100)
        let fileTotal = Math.floor(total / 1000)
        let fileSize;
        (fileTotal < 1024) ? fileSize = fileTotal + 'KB': fileSize = (loaded / (1024 * 1024)).toFixed(2) + 'MB';
        let progressHTML = `<li class="rows">
                                <i class="fas fa-file-alt "></i>
                                <div class="content">
                                    <div class="details">
                                        <span class="name">${name} . Uploading</span>
                                        <span class="percent">${fileLoaded}%</span>
                                    </div>
                                    <div class="progress-bar">
                                        <div class="progress" style="width:${fileLoaded}%"></div>
                                    </div>
                                </div>
                            </li>`;
        uploadedArea.innerHTML = ''
        progressArea.innerHTML = progressHTML

        if (loaded == total) {
            progressArea.innerHTML = ''
            let uploadedHTML = `<li class="rows">
                                    <div class="content">
                                        <i class="fas fa-file-alt"></i>
                                        <div class="details">
                                            <span class="name">${name} . Uploaded</span>
                                            <span class="size">${fileSize}</span>
                                        </div>
                                    </div>
                                    <i class="fas fa-check"></i>
                                </li>`;
            uploadedArea.innerHTML = uploadedHTML
            // uploadedArea.insertAdjacentHTML('afterbegin', uploadedHTML)
        }
    })
    xhr.send(new FormData(form))
}
