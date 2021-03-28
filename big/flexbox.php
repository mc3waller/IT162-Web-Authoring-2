<?php include('includes/header.php'); ?>
                <p>Flexbox (short for Flexible Box Module) is a CSS (Cascading Stylesheet) layout model designed to offer efficient space distribution and alignment capabilities when writing web page structures in CCS code. It can effectively replace the use of many float, table, position, and display property methods to align items in a container along one dimension when creating relatively small-scale responsive page structures.</p>

                <p>By giving the CSS property <code>display: flex</code> to an HTML container element, items within that container can be affected and manipulated by flexbox properties. Using these properties, normally complex layout rules can be specified in simpler terms to manipulate the positional, structural, sizing, and directional behavior of contained “flex items”. Most notably, flexbox will give the container the ability to automatically alter the width, height, and order of its items to either expand them and fill available space or shrink them to prevent overflow. Other behaviors include (but are not limited to): changing the direction of items in a row or column using <code>flex-direction</code>; the order of items with a specified numeric <code>order</code> value; the amount of available space a specific item will take up in a row or column when given a numeric value with <code>flex-grow</code>; and justifying the content in a certain direction or to have a certain amount of space between or around each item using <code>justify-content</code>. All of this occurs on a layout where items are laid along a “main axis” and a “cross-axis”. The main axis is where flex items are primarily laid out and, although horizontal by default, its direction can depend on the value of the <code>flex-direction</code> property. The cross axis is perpendicular to the main axis and its direction depends on the direction of the main axis.</p>

                <p>Making use of flexbox is a convenient and powerful aid in structuring responsive web pages, but rather than being used to structure overall page layouts, it is best used on a smaller scale for alignment and controlling the flow of content. As opposed to CSS grid, which is better suited for and capable of handling major layout needs, flexbox is an efficient answer to content-driven designs when ensuring that the content fits where it needs to is most important.</p>
            </section>
            <!-- END LEFT COLUMN -->

            <!-- START RIGHT COLUMN -->
            <aside>
            <h3>Works Cited</h3>
                <p>
                <cite>Coyier, Chris. “A Complete Guide to Flexbox.” CSS-Tricks, 8 April 2013, <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/" target="_blank">https://css-tricks.com/snippets/css/a-guide-to-flexbox/</a></cite>
                <br /><br />
                <cite>Maldonado, Leonardo. “When to use flexbox and when to use CSS grid.” LogRocket: Frontend Monitoring, 6 April 2020, <a href="https://blog.logrocket.com/flexbox-vs-css-grid/" target="_blank">https://blog.logrocket.com/flexbox-vs-css-grid/</a></cite>
                </p>
            </aside>
            <!-- END RIGHT COLUMN -->
<?php include('includes/footer.php'); ?>