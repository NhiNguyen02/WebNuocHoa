document.getElementById('tab-policy').style.display='none';
    document.getElementById('tab-instructions').style.display='none';

    function setButtonStyle(button, background, color){
        button.style.background=background;
        button.style.color=color;
    }
    setButtonStyle(document.getElementById('description'),'#a18787','white');

    document.getElementById('description').addEventListener('click', function(){
        document.getElementById('tab-descriptions').style.display='block';
        document.getElementById('tab-instructions').style.display='none';
        document.getElementById('tab-policy').style.display='none';
        setButtonStyle(document.getElementById('description'),'#a18787','white');
        setButtonStyle(document.getElementById('instruction'),'#f5f6f2','black');
        setButtonStyle(document.getElementById('policy'),'#f5f6f2','black');
    })
    document.getElementById('instruction').addEventListener('click', function(){
        document.getElementById('tab-descriptions').style.display='none';
        document.getElementById('tab-instructions').style.display='block';
        document.getElementById('tab-policy').style.display='none';
        setButtonStyle(document.getElementById('instruction'),'#a18787','white');
        setButtonStyle(document.getElementById('policy'),'#f5f6f2','black');
        setButtonStyle(document.getElementById('description'),'#f5f6f2','black');
    })
    document.getElementById('policy').addEventListener('click', function(){
        document.getElementById('tab-descriptions').style.display='none';
        document.getElementById('tab-instructions').style.display='none';
        document.getElementById('tab-policy').style.display='block';
        setButtonStyle(document.getElementById('policy'),'#a18787','white');
        setButtonStyle(document.getElementById('instruction'),'#f5f6f2','black');
        setButtonStyle(document.getElementById('description'),'#f5f6f2','black');
    });