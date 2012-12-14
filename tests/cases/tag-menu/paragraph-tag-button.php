<!doctype html>
<html>
<head>
    <script type="text/javascript" src="../../js/case.js"></script>
    <?php $uri = '../../../src/'; include '../../../src/include.php'; ?>
</head>
<body class="simple">
    <script type="text/javascript">
        rangy.init();
    </script>
    <div class="test-1">
        <h1>Paragraph Tag Button 1: Word Group Selection</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis {dui id erat pellentesque et rhoncus} nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis 
                </p><p>
                    {dui id erat pellentesque et rhoncus}
                </p><p>
                    nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-1', function(input) {
            input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-tag-menu').trigger('click');
            var okButton = input.find('.raptor-ui-tag-menu-menu [data-value=p]');
            okButton.trigger('click');
            
            var tagMenuValue = (input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-tag-menu')).firstChild.data;
            rangesToTokens(rangy.getSelection().getAllRanges());
            if (!tagMenuValue.is('Paragraph')){
                throw new Error('Button is not active');
            }
        });
    </script>

    <div class="test-2">
        <h1>Paragraph Tag Button 2: Single Word Selection</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur {adipiscing} elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur 
                </p><p>
                    {adipiscing}
                </p><p> 
                    elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-2', function(input) {
            input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-tag-menu').trigger('click');
            var okButton = input.find('.raptor-ui-tag-menu-menu [data-value=p]');
            okButton.trigger('click');
            
            var tagMenuValue = (input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-tag-menu')).firstChild.data;
            rangesToTokens(rangy.getSelection().getAllRanges());
            if (!tagMenuValue.is('Paragraph')){
                throw new Error('Button is not active');
            }
        });
    </script>

    <div class="test-3">
        <h1>Paragraph Tag Button 3: Part Word Selection</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pel{lentesqu}e et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pel
                </p><p>
                    {lentesqu}
               </p><p>
                    e et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-3', function(input) {
            input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-tag-menu').trigger('click');
            var okButton = input.find('.raptor-ui-tag-menu-menu [data-value=p]');
            okButton.trigger('click');
            
            var tagMenuValue = (input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-tag-menu')).firstChild.data;
            rangesToTokens(rangy.getSelection().getAllRanges());
            if (!tagMenuValue.is('Paragraph')){
                throw new Error('Button is not active');
            }
        });
    </script>

     <div class="test-4">
        <h1>Paragraph Tag Button 4: Multi-Paragraph Selection</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui {id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.
                </p><p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse} interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui 
                </p><p>
                    {id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.
                </p><p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse}
               </p><p> interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-4', function(input) {
            input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-tag-menu').trigger('click');
            var okButton = input.find('.raptor-ui-tag-menu-menu [data-value=p]');
            okButton.trigger('click');
            
            var tagMenuValue = (input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-tag-menu')).firstChild.data;
            rangesToTokens(rangy.getSelection().getAllRanges());
            if (!tagMenuValue.is('Paragraph')){
                throw new Error('Button is not active');
            }
        });
    </script>

    <div class="test-5">
        <h1>Paragraph Tag Button 5: Multi-Paragraph Selection</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    {Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.
                </p>
                <p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.}
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p>
                    {Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.
                </p>
                <p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.}
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-5', function(input) {
            input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-tag-menu').trigger('click');
            var okButton = input.find('.raptor-ui-tag-menu-menu [data-value=p]');
            okButton.trigger('click');
            
            var tagMenuValue = (input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-tag-menu')).firstChild.data;
            rangesToTokens(rangy.getSelection().getAllRanges());
            if (!tagMenuValue.is('Paragraph')){
                throw new Error('Button is not active');
            }
        });
    </script>


    <div class="test-6">
        <h1>Paragraph Tag Button 6: Empty Selection in Word</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.
                </p>
                <p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspen{}disse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.
                </p>
                <p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspen{}disse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-6', function(input) {
            input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-tag-menu').trigger('click');
            var okButton = input.find('.raptor-ui-tag-menu-menu [data-value=p]');
            okButton.trigger('click');
            
            var tagMenuValue = (input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-tag-menu')).firstChild.data;
            rangesToTokens(rangy.getSelection().getAllRanges());
            if (!tagMenuValue.is('Paragraph')){
                throw new Error('Button is not active');
            }
        });
    </script>

    <div class="test-7">
        <h1>Paragraph Tag Button 7: Empty Selection at the Beginning of a Word</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada {}hendrerit velit nec tristique.
                </p>
                <p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada {}hendrerit velit nec tristique.
                </p>
                <p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-7', function(input) {
            input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-tag-menu').trigger('click');
            var okButton = input.find('.raptor-ui-tag-menu-menu [data-value=p]');
            okButton.trigger('click');
            
            var tagMenuValue = (input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-tag-menu')).firstChild.data;
            rangesToTokens(rangy.getSelection().getAllRanges());
            if (!tagMenuValue.is('Paragraph')){
                throw new Error('Button is not active');
            }
        });
    </script>
    
    <div class="test-8">
        <h1>Paragraph Tag Button 8: Empty Selection at the Beginning of a Word in a Header Paragraph</h1>
        <div class="test-input">
            <div class="editible">
                <h2>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada {}hendrerit velit nec tristique.
                </h2>
                <h2>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </h2>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada {}hendrerit velit nec tristique.
                </p>
                <h2>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </h2>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-8', function(input) {
            input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-tag-menu').trigger('click');
            var okButton = input.find('.raptor-ui-tag-menu-menu [data-value=p]');
            okButton.trigger('click');
            
            var tagMenuValue = (input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-tag-menu')).firstChild.data;
            rangesToTokens(rangy.getSelection().getAllRanges());
            if (!tagMenuValue.is('Paragraph')){
                throw new Error('Button is not active');
            }
        });
    </script>
</body>
</html>