<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Images</title>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
</head>

<body>
 <div class="container">
 <a href="/links/logout.php" style="float: right;">Log Out</a>
    <h1>Images</h1>

    <h3>
        upload Images
    </h3>
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="index.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Upload Image</label>
                    <div class="custom-file">
                        <input type="file" name="images" accept="image/*" class="custom-file-input" id="customFile" required>
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <div class="raw">
        <div class="col-md-12">
            <table>
                <tr>
                    <th>Image</th>
                    <th>Path</th>
                    <th>Action</th>
                </tr>
                <?php foreach($images as $key => $image): ?>
                <tr>
                    <td><img src="/links/images/<?= $image ?>" alt="" srcset="" width="100"></td>
                    <td><?= $base_path ?>/images/<?= $image ?>
                        <input style="width:0; height:0" class="base-path-<?= $key ?>" value="<?= $base_path ?>/images/<?= $image ?>">
                    </td>
                    <td> 
                        <button type="button" class="copy-path-btn" data-key="<?= $key ?>">copy path</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
 </div>

 <script>
 var btns = document.querySelectorAll(".copy-path-btn");
    btns.forEach(function(el, index) {
        el.addEventListener("click", function() {
         copyToClipboard(document.querySelector(".base-path-"+this.dataset.key));
     });
  })

function copyToClipboard(elem) {
	  // create hidden text element, if it doesn't already exist
    var targetId = "_hiddenCopyText_";
    var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
    var origSelectionStart, origSelectionEnd;
    if (isInput) {
        // can just use the original source element for the selection and copy
        target = elem;
        origSelectionStart = elem.selectionStart;
        origSelectionEnd = elem.selectionEnd;
    } else {
        // must use a temporary form element for the selection and copy
        target = document.getElementById(targetId);
        if (!target) {
            var target = document.createElement("textarea");
            target.style.position = "absolute";
            target.style.left = "-9999px";
            target.style.top = "0";
            target.id = targetId;
            document.body.appendChild(target);
        }
        target.textContent = elem.textContent;
    }
    // select the content
    var currentFocus = document.activeElement;
    target.focus();
    target.setSelectionRange(0, target.value.length);
    
    // copy the selection
    var succeed;
    try {
    	  succeed = document.execCommand("copy");
    } catch(e) {
        succeed = false;
    }
    // restore original focus
    if (currentFocus && typeof currentFocus.focus === "function") {
        currentFocus.focus();
    }
    
    if (isInput) {
        // restore prior selection
        elem.setSelectionRange(origSelectionStart, origSelectionEnd);
    } else {
        // clear temporary content
        target.textContent = "";
    }
    return succeed;
}
 </script>
</body>