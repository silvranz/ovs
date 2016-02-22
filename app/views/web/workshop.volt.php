<div class="top-menu-editor-separator" style="height:40px;"></div>

<div class="left-control">
	<ul>
		<li class="hvr-shrink left-control-list page" trigger-content-id="page-background-content"></li>
		<li class="hvr-shrink left-control-list plus" trigger-content-id="add-content"></li>
	</ul>
</div>

<!-- PAGE BACKGROUND CONTENT -->
<div class="left-content" id="page-background-content" style="display:none">
	<div class="content">
		<div class="category-content">
			<div class="header">
				<label class="title">Page Background</label>
			</div>
			<div class="category-view">
				<div class="title-section">
					<div class="title">Solid Color</div>
				</div>
				<div class="items-section">
					<ul>
						<!--li class="bg-items blue"></li>
						<li class="bg-items red"></li>
						<li class="bg-items green"></li>
						<li class="bg-items yellow"></li-->
						<li class="bg-items purple"></li>
						<li class="bg-items darkblue"></li>
						<li class="bg-items orange"></li>
						<li class="bg-items gray"></li>
					</ul>
				</div>

				<div class="title-section">
					<div class="title">Not having the right colors ?</div>
				</div>
				<div class="items-section">
					<form>
						<label for="txtHexColor">Hex Color</label>
						<input type="color" id="txtHexColor" class="input-hex-color"/>
						<input type="submit" id="btnSetBackgroundColor" class="button button-primary" value="Set Color" />
					</form>
				</div>
				
				<div class="title-section">
					<div class="title">Upload background image</div>
				</div>
				<div class="items-section">
					<input type="button" class="button button-primary u-full-width md-trigger" data-modal="modal-upload-bg-image" value="Upload Background Image" />
				</div>

				<div class="items-section">
					<input type="button" id="btnApplyBackgroundToOtherPages" class="button button-success u-full-width"value="Apply to other pages" />
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ADD CONTENT  -->
<div class="left-content" id="add-content" style="display:none">
	<div class="content">
		<ul class="category-list">
			<li class="category" trigger-panel-id="text-panel">
				Text
			</li>
			<li class="category" trigger-panel-id="button-panel">
				Button
			</li>
			<li class="category" trigger-panel-id="link-panel">
				Link
			</li>
			<li class="category" trigger-panel-id="textbox-panel">
				Textbox
			</li>
			<li class="category" trigger-panel-id="image-panel">
				Image
			</li>
			<li class="category" trigger-panel-id="container-panel">
				Container
			</li>
			<li class="category" trigger-panel-id="widget-panel">
				Widget
			</li>
		</ul>
		<div class="category-content" id="text-panel">
			<div class="header">
				<label class="title">Add Text</label>
			</div>
			<div class="category-view">
				<div class="draggable-element" map="h1">
					<h1>Site Title</h1>
				</div>
				<div class="draggable-element" map="h1">
					<h1>Site Title</h1>
				</div>
				<div class="draggable-element" map="h2">
					<h2>Page Title</h2>
				</div>
				<div class="draggable-element" map="h4">
					<h4>Large Heading</h4>
				</div>
				<div class="draggable-element" map="h6">
					<h6>Small Heading</h6>
				</div>
				<div class="draggable-element" map="p">
					<p>I'm a paragraph. Click here to add your own text and edit me. It's easy.</p>
				</div>
			</div>
		</div>
		<div class="category-content" id="button-panel" style="display:none;">
			<div class="header">
				<label class="title">Add Button</label>
			</div>
			<div class="category-view">
				<div class="title-section">
					<div class="title">Simple Button</div>
				</div>
				<div class="items-section">
					<input type="button" class="button button-primary draggable-element" value="Button" map="button-primary" />
					<input type="button" class="button button-danger draggable-element" value="Button" map="button-danger" />
					<input type="button" class="button button-success draggable-element" value="Button" map="button-success" />
				</div>

				<div class="title-section">
					<div class="title">Grow Button</div>
				</div>
				<div class="items-section">
					<input type="button" class="hvr-grow button button-primary draggable-element" value="Grow" element-type="button" />
					<input type="button" class="hvr-grow button button-danger draggable-element" value="Grow" element-type="button" />
					<input type="button" class="hvr-grow button button-success draggable-element" value="Grow" element-type="button" />
				</div>

				<div class="title-section">
					<div class="title">Shrink Button</div>
				</div>
				<div class="items-section">
					<input type="button" class="hvr-shrink button button-primary draggable-element" value="Shrink" element-type="button" />
					<input type="button" class="hvr-shrink button button-danger draggable-element" value="Shrink" element-type="button" />
					<input type="button" class="hvr-shrink button button-success draggable-element" value="Shrink" element-type="button" />
				</div>

				<div class="title-section">
					<div class="title">Box Shadow Button</div>
				</div>
				<div class="items-section">
					<input type="button" class="hvr-box-shadow-outset button button-primary draggable-element" value="Shadow" element-type="button" />
					<input type="button" class="hvr-box-shadow-outset button-danger draggable-element" value="Shadow" element-type="button" />
					<input type="button" class="hvr-box-shadow-outset button-success draggable-element" value="Shadow" element-type="button" />
				</div>
			</div>
		</div>
		<div class="category-content" id="link-panel" style="display:none;">
			<div class="header">
				<label class="title">Add Link</label>
			</div>
			<div class="category-view">
				<div class="draggable-element" element-type="link">
					<h4>Simple Link</h4>
				</div>
			</div>
		</div>
		<div class="category-content" id="textbox-panel" style="display:none;">
			<div class="header">
				<label class="title">Add Textbox</label>
			</div>
			<div class="category-view">
				<div>
					<input type="text" class="u-full-width draggable-element" element-type="textbox" />
				</div>
			</div>
		</div>
		<div class="category-content" id="image-panel" style="display:none;">
			<div class="header">
				<label class="title">Add Image</label>
			</div>
			<div class="category-view">
				<div>
					<input type="button" class="button button-primary u-full-width md-trigger" data-modal="modal-upload-image" value="Upload Image" />
				</div>
			</div>
		</div>
		<div class="category-content" id="container-panel" style="display:none;">
			<div class="header">
				<label class="title">Add Container</label>
			</div>
			<div class="category-view">
				<div class="row">
					<div class="twelve column">
						<div class="container-box gray draggable-element" element-type="container"></div>
					</div>
				</div>
				<div class="row">
					<div class="twelve column">
						<div class="container-box border-solid draggable-element" element-type="container"></div>
					</div>
				</div>
				<div class="row">
					<div class="twelve column">
						<div class="container-box border-dashed draggable-element" element-type="container"></div>
					</div>
				</div>
				<div class="row">
					<div class="twelve column">
						<div class="container-box border-dotted draggable-element" element-type="container"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="category-content" id="widget-panel" style="display:none;">
			<div class="header">
				<label class="title">Add Widget</label>
			</div>
			<div class="category-view">

				<!-- Widget Gallery -->
				<div class="row">
					<div class="twelve column">
						<div style="background-color:rgba(249, 249, 249, 0.7); padding: 15px; width:430px;" class="draggable-element" element-type="gallery">
							<div class="row" style="pointer-events:none;">
					  			<p><b>You can manage your gallery at Gallery Setting after publish</b></p>
					  		</div>
							<div class="row" style="pointer-events:none;">
								<div class="three columns gallery-category">
									<ul class="no-ul">
										<li>Category 1</li>
										<li>Category 2</li>
									</ul>
								</div>
								<div class="nine columns gallery-image-container">
									<ul class="no-ul">
										<li style="display:inline-block; padding: 0 10px;">
											<div style="border:1px solid #000; width:130px; height: auto; text-align:center;">
												<span style="font-size: 12px;">Im image</span>
												<div class="image-gallery" style="border:1px solid #000; width:100px; height: 50px; margin: auto;"></div>
												<span style="font-size: 12px;">Im description</span>
											</div>
										</li>
										<li style="display:inline-block; padding: 0 10px;">
											<div style="border:1px solid #000; width:130px; height: auto; text-align:center;">
												<span style="font-size: 12px;">Im image</span>
												<div class="image-gallery" style="border:1px solid #000; width:100px; height: 50px; margin: auto;"></div>
												<span style="font-size: 12px;">Im description</span>
											</div>
										</li>
										<li style="display:inline-block; padding: 0 10px;">
											<div style="border:1px solid #000; width:130px; height: auto; text-align:center;">
												<span style="font-size: 12px;">Im image</span>
												<div class="image-gallery" style="border:1px solid #000; width:100px; height: 50px; margin: auto;"></div>
												<span style="font-size: 12px;">Im description</span>
											</div>
										</li>
										<li style="display:inline-block; padding: 0 10px;">
											<div style="border:1px solid #000; width:130px; height: auto; text-align:center;">
												<span style="font-size: 12px;">Im image</span>
												<div class="image-gallery" style="border:1px solid #000; width:100px; height: 50px; margin: auto;"></div>
												<span style="font-size: 12px;">Im description</span>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<hr>

				<!-- Widget Article -->
				<div class="row">
					<div class="twelve column">
						<div style="background-color:rgba(249, 249, 249, 0.7); padding: 15px; width:430px;" class="draggable-element" element-type="article">
							<div class="row" style="pointer-events:none;">
					  			<p><b>You can manage your blog at Article Setting after publish</b></p>
					  		</div>
							<div class="row" style="pointer-events:none;">
								<div class="three columns article-category">
									<ul class="no-ul">
										<li>Category 1</li>
										<li>Category 2</li>
									</ul>
								</div>
								<div class="nine columns article-content">
									<h3>Im Article Title</h3>
									<div class="description">
										<p>
											Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys 
											standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to 
											make a type specimen book. It has survived not only five centuries, but also the leap into electronic 
											typesetting, remaining essentially unchanged.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<!-- Primary Page Layout –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<!--div id="editor-container">
	<div class="ruler vertical left"></div>
	<div class="ruler vertical right"></div>
</div-->
<svg id="editor-container">
	<rect id="boudingBoxHover" fill="#fff" fill-opacity="0" stroke="#3899EC" style="display:none"></rect>
</svg>
<!-- End Document –––––––––––––––––––––––––––––––––––––––––––––––––– -->

<!-- Modal Upload Background Image -->
<div class="md-modal md-effect-1 modal-image" id="modal-upload-bg-image">
	<div class="md-content">
		<div class="md-content-header">
			<div class="row">
				<div class="eleven columns">
					<h4>Upload background image</h4>
				</div>
				<div class="one columns">
					<a href="#" class="md-close modal-close-button"></a>
				</div>
			</div>
		</div>

		<div class="items-section">
			<ul>
				<li class="bg-items">
					<img src="source/images/available_images/1.jpg" width="110" height="100"><br>
				</li>
				<li class="bg-items">
					<img src="source/images/available_images/2.jpg" width="110" height="100"><br>
				</li>
				<li class="bg-items">
					<img src="source/images/available_images/3.jpg" width="110" height="100"><br>
				</li>
				<li class="bg-items">
					<img src="source/images/available_images/4.jpg" width="110" height="100"><br>
				</li>
				<li class="bg-items">
					<img src="source/images/available_images/5.jpg" width="110" height="100"><br>
				</li>
				<li class="bg-items">
					<img src="source/images/available_images/6.jpg" width="110" height="100"><br>
				</li>
				<li class="bg-items">
					<img src="source/images/available_images/7.jpg" width="110" height="100"><br>
				</li>
				<li class="bg-items">
					<img src="source/images/available_images/8.jpg" width="110" height="100"><br>
				</li>
				<li class="bg-items">
					<img src="source/images/available_images/9.jpg" width="110" height="100"><br>
				</li>
				<li class="bg-items">
					<img src="source/images/available_images/10.jpg" width="110" height="100"><br>
				</li>
				<li class="bg-items">
					<img src="source/images/available_images/11.jpg" width="110" height="100"><br>
				</li>
				<li class="bg-items">
					<img src="source/images/available_images/12.jpg" width="110" height="100"><br>
				</li>
				<li class="bg-items">
					<img src="source/images/available_images/13.jpg" width="110" height="100"><br>
				</li>
				<li class="bg-items">
					<img src="source/images/available_images/14.jpg" width="110" height="100"><br>
				</li>
				<li class="bg-items">
					<img src="source/images/available_images/15.jpg" width="110" height="100"><br>
				</li>
				<li class="bg-items">
					<img src="source/images/available_images/16.jpg" width="110" height="100"><br>
				</li>
			</ul>
		</div>
		<div class="row">
            <div class="twelve columns taright medium-pd-top">
            	<a id="btnSetBackgroundImage" href="#" class="button button-primary md-close">Set as background</a>
            </div>
      	</div>
	</div>
</div>

<!-- Modal Upload Background Image -->
<div class="md-modal md-effect-1 modal-image" id="modal-upload-image">
	<div class="md-content">
		<div class="md-content-header">
			<div class="row">
				<div class="eleven columns">
					<h4>Upload image</h4>
				</div>
				<div class="one columns">
					<a href="#" class="md-close modal-close-button"></a>
				</div>
			</div>
		</div>

		<div class="items-section">
			<ul>
				<li class="bg-items">
					<img src="source/images/available_images/1.jpg" width="110" height="100"><br>
				</li>
				<li class="bg-items">
					<img src="source/images/available_images/2.jpg" width="110" height="100"><br>
				</li>
				<li class="bg-items">
					<img src="source/images/available_images/3.jpg" width="110" height="100"><br>
				</li>
				<li class="bg-items">
					<img src="source/images/available_images/4.jpg" width="110" height="100"><br>
				</li>
				<li class="bg-items">
					<img src="source/images/available_images/5.jpg" width="110" height="100"><br>
				</li>
			</ul>
		</div>
		<div class="row">
            <div class="twelve columns taright medium-pd-top">
            	<a id="btnUploadImage" href="#" class="button button-primary md-close">Upload image</a>
            </div>
      	</div>
	</div>
</div>

<!-- Modal Add Page -->
<div class="md-modal md-effect-1" id="modal-add-page">
	<div class="md-content">
		<div class="md-content-header">
			<div class="row">
				<div class="eleven columns">
					<h4>Add Pages</h4>
				</div>
				<div class="one columns">
					<a href="#" class="md-close modal-close-button"></a>
				</div>
			</div>
		</div>
		<div class"row">
			<div class="three columns">
				<div class="box-add-page-category">
					<ul>
						<li>Blank Page </li>
						<li>About Page</li>
						<li>Contact Page</li>
					</ul>
				</div>
			</div>
			<div class="nine columns">
				<div class="box-add-page-content">
					<ul>
						<li>
							<div class="row">
	    						<div class="three columns">
	    							<div style="border:1px solid #000; width:100px; height:130px; margin-left: 10px;">
	    								<!-- <img src="images/browser-mockup.jpg" style="width:60px; height:40px;" /> -->
	    							</div>
	    						</div>
	    						<div class="nine columns no-mg">
	    							<div class="page-name">Blank Page</div>
	    							<div class="page-description">
	    								Completely blank page. Match for those who had taste like designer
	    							</div>
	    							<div class="page-control">
	    								<input type="button" class="button button-primary btnChoosePageItem" value="I want this" />
	    								<input type="text" class="input-page-name"  placeholder="Type your page name here &hellip;" />
	    							</div>
	    						</div>
	    					</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
            <div class="twelve columns taright medium-pd-top">
            	<a id="btnAddPage" href="#" class="button button-primary md-close">Add</a>
            </div>
      	</div>
	</div>
</div>

<!-- Modal Delete Page -->
<div class="md-modal md-effect-1" id="modal-delete-page">
	<div class="md-content">
		<div class="md-content-header">
			<div class="row">
				<div class="eleven columns">
					<h4>Delete Page</h4>
				</div>
				<div class="one columns">
					<a href="#" class="md-close modal-close-button"></a>
				</div>
			</div>
		</div>
		<div class"row">
			<div class="twelve columns tacenter">
				<h6 id="page-delete-confirmation">Are you sure to delete selected page?</h6>
			</div>
		</div>
		<div class="row">
            <div class="twelve columns taright medium-pd-top">
            	<a href="#" class="button md-close">Cancel</a>
            	<a id="btnDeletePage" href="#" class="button button-danger md-close">Delete</a>
            </div>
      	</div>
	</div>
</div>

<!-- Modal Rename Page -->
<div class="md-modal md-effect-1" id="modal-rename-page">
	<div class="md-content">
		<div class="md-content-header">
			<div class="row">
				<div class="eleven columns">
					<h4>Rename Page</h4>
				</div>
				<div class="one columns">
					<a href="#" class="md-close modal-close-button"></a>
				</div>
			</div>
		</div>
		<div class"row">
			<div class="twelve columns tacenter">
				<input type="text" class="u-full-width" id="txtRenamePage" />
			</div>
		</div>
		<div class="row">
            <div class="twelve columns taright medium-pd-top">
            	<a href="#" class="button md-close">Cancel</a>
            	<a id="btnRenamePage" href="#" class="button button-success md-close">Rename</a>
            </div>
      	</div>
	</div>
</div>

<div class="md-overlay"></div><!-- the overlay element -->

<!-- Properties Content of Element -->

<!-- Text -->
<div id="properties-text" class="panel-properties">
	<div class="row">
	<div class="twelve columns">
		<label>Opacity</label>
		<input type="range" min="0" max="100" id="prop-opacity-text" class="u-full-width prop-opacity" />
	</div>
</div>
<div class="row">
	<div class="three columns">
		<label class="tacenter">Width</label>
		<input type="number" id="prop-width-text" class="u-full-width prop-width" />
	</div>
	<div class="three columns">
		<label class="tacenter">Height</label>
		<input type="number" id="prop-height-text" class="u-full-width prop-height" />
	</div>
	<div class="three columns">
		<label class="tacenter">X</label>
		<input type="number" id="prop-xpos-text" class="u-full-width prop-xpos" />
	</div>
	<div class="three columns">
		<label class="tacenter">Y</label>
		<input type="number" id="prop-ypos-text" class="u-full-width prop-ypos" />
	</div>
</div>
<div class="row">
	<div class="six columns">
		<label>Text Color</label>
		<input type="color" id="prop-text-color-text" class="u-full-width prop-text-color">
	</div>
	<div class="six columns">
		<label>Background Color</label>
		<input type="color" id="prop-background-color-text" class="u-full-width prop-background-color">
	</div>
</div>
<div class="row">
	<div class="four columns">
		<label>Border Width</label>
		<input type="number" class="u-full-width prop-border-width">
	</div>
	<div class="four columns">
		<label>Border Style</label>
		<select class="u-full-width prop-border-style">
			<option value="dashed">Dashed</option>
			<option value="dotted">Dotted</option>
			<option value="double">Double</option>
			<option value="groove">Groove</option>
			<option value="hidden">Hidden</option>
			<option value="inherit">Inherit</option>
			<option value="initial">Initial</option>
			<option value="inset">Inset</option>
			<option value="none">None</option>
			<option value="outset">Outset</option>
			<option value="ridge">Ridge</option>
			<option value="solid">Solid</option>
		</select>
	</div>
	<div class="four columns">
		<label>Border Radius</label>
		<input type="number" class="u-full-width prop-border-radius">
	</div>
</div>
<div class="row">
	<div class="twelve columns">
		<label>Border Color</label>
		<input type="color" class="u-full-width prop-border-color">
	</div>
</div>
<div class="row">
	<div class="twelve columns">
		<label>Show on all pages</label>
		<label class="switch switch-green">
			<input type="checkbox" class="switch-input prop-switch-showall">
			<span class="switch-label" data-on="Yes" data-off="No"></span>
			<span class="switch-handle"></span>
		</label>
	</div>
</div>
</div>

<!-- Link -->
<div id="properties-link" class="panel-properties">
	<div class="row">
	<div class="twelve columns">
		<label>Opacity</label>
		<input type="range" min="0" max="100" id="prop-opacity-link" class="u-full-width prop-opacity" />
	</div>
</div>
<div class="row">
	<div class="three columns">
		<label class="tacenter">Width</label>
		<input type="number" id="prop-width-link" class="u-full-width prop-width" />
	</div>
	<div class="three columns">
		<label class="tacenter">Height</label>
		<input type="number" id="prop-height-link" class="u-full-width prop-height" />
	</div>
	<div class="three columns">
		<label class="tacenter">X</label>
		<input type="number" id="prop-xpos-link" class="u-full-width prop-xpos" />
	</div>
	<div class="three columns">
		<label class="tacenter">Y</label>
		<input type="number" id="prop-ypos-link" class="u-full-width prop-ypos" />
	</div>
</div>
<div class="row">
	<div class="six columns">
		<label>Text Color</label>
		<input type="color" id="prop-text-color-text" class="u-full-width prop-text-color">
	</div>
	<div class="six columns">
		<label>Background Color</label>
		<input type="color" id="prop-background-color-link" class="u-full-width prop-background-color">
	</div>
</div>
<div class="row">
	<div class="four columns">
		<label>Border Width</label>
		<input type="number" class="u-full-width prop-border-width">
	</div>
	<div class="four columns">
		<label>Border Style</label>
		<select class="u-full-width prop-border-style">
			<option value="dashed">Dashed</option>
			<option value="dotted">Dotted</option>
			<option value="double">Double</option>
			<option value="groove">Groove</option>
			<option value="hidden">Hidden</option>
			<option value="inherit">Inherit</option>
			<option value="initial">Initial</option>
			<option value="inset">Inset</option>
			<option value="none">None</option>
			<option value="outset">Outset</option>
			<option value="ridge">Ridge</option>
			<option value="solid">Solid</option>
		</select>
	</div>
	<div class="four columns">
		<label>Border Radius</label>
		<input type="number" class="u-full-width prop-border-radius">
	</div>
</div>
<div class="row">
	<div class="twelve columns">
		<label>Border Color</label>
		<input type="color" class="u-full-width prop-border-color">
	</div>
</div>
<div class="row">
	<div class="twelve columns">
		<label>Show on all pages</label>
		<label class="switch switch-green">
			<input type="checkbox" class="switch-input prop-switch-showall">
			<span class="switch-label" data-on="Yes" data-off="No"></span>
			<span class="switch-handle"></span>
		</label>
	</div>
</div>
</div>

<!-- Textbox -->
<div id="properties-textbox" class="panel-properties">
	<div class="row">
	<div class="twelve columns">
		<label>Placeholder</label>
		<input id="prop-placeholder-textbox" class="u-full-width" type="text" />
	</div>
</div>
<div class="row">
	<div class="twelve columns">
		<label>Opacity</label>
		<input type="range" min="0" max="100" id="prop-opacity-textbox" class="u-full-width prop-opacity" />
	</div>
</div>
<div class="row">
	<div class="three columns">
		<label class="tacenter">Width</label>
		<input type="number" id="prop-width-textbox" class="u-full-width prop-width" />
	</div>
	<div class="three columns">
		<label class="tacenter">Height</label>
		<input type="number" id="prop-height-textbox" class="u-full-width prop-height" />
	</div>
	<div class="three columns">
		<label class="tacenter">X</label>
		<input type="number" id="prop-xpos-textbox" class="u-full-width prop-xpos" />
	</div>
	<div class="three columns">
		<label class="tacenter">Y</label>
		<input type="number" id="prop-ypos-textbox" class="u-full-width prop-ypos" />
	</div>
</div>
<div class="row">
	<div class="six columns">
		<label>Text Color</label>
		<input type="color" id="prop-text-color-textbox" class="u-full-width prop-text-color">
	</div>
	<div class="six columns">
		<label>Background Color</label>
		<input type="color" id="prop-background-color-textbox" class="u-full-width prop-background-color">
	</div>
</div>
<div class="row">
	<div class="four columns">
		<label>Border Width</label>
		<input type="number" class="u-full-width prop-border-width">
	</div>
	<div class="four columns">
		<label>Border Style</label>
		<select class="u-full-width prop-border-style">
			<option value="dashed">Dashed</option>
			<option value="dotted">Dotted</option>
			<option value="double">Double</option>
			<option value="groove">Groove</option>
			<option value="hidden">Hidden</option>
			<option value="inherit">Inherit</option>
			<option value="initial">Initial</option>
			<option value="inset">Inset</option>
			<option value="none">None</option>
			<option value="outset">Outset</option>
			<option value="ridge">Ridge</option>
			<option value="solid">Solid</option>
		</select>
	</div>
	<div class="four columns">
		<label>Border Radius</label>
		<input type="number" class="u-full-width prop-border-radius">
	</div>
</div>
<div class="row">
	<div class="twelve columns">
		<label>Border Color</label>
		<input type="color" class="u-full-width prop-border-color">
	</div>
</div>
<div class="row">
	<div class="twelve columns">
		<label>Show on all pages</label>
		<label class="switch switch-green">
			<input type="checkbox" class="switch-input prop-switch-showall">
			<span class="switch-label" data-on="Yes" data-off="No"></span>
			<span class="switch-handle"></span>
		</label>
	</div>
</div>
</div>

<!-- Button -->
<div id="properties-button" class="panel-properties">
	<div class="row">
	<div class="twelve columns">
		<label>Button Text</label>
		<input id="prop-text-button" class="u-full-width" type="text" />
	</div>
</div>
<div class="row">
	<div class="twelve columns">
		<label>Opacity</label>
		<input type="range" min="0" max="100" id="prop-opacity-button" class="u-full-width prop-opacity" />
	</div>
</div>
<div class="row">
	<div class="three columns">
		<label class="tacenter">Width</label>
		<input type="number" id="prop-width-button" class="u-full-width prop-width" />
	</div>
	<div class="three columns">
		<label class="tacenter">Height</label>
		<input type="number" id="prop-height-button" class="u-full-width prop-height" />
	</div>
	<div class="three columns">
		<label class="tacenter">X</label>
		<input type="number" id="prop-xpos-button" class="u-full-width prop-xpos" />
	</div>
	<div class="three columns">
		<label class="tacenter">Y</label>
		<input type="number" id="prop-ypos-button" class="u-full-width prop-ypos" />
	</div>
</div>
<div class="row">
	<div class="six columns">
		<label>Text Color</label>
		<input type="color" id="prop-text-color-button" class="u-full-width prop-text-color">
	</div>
	<div class="six columns">
		<label>Background Color</label>
		<input type="color" id="prop-background-color-button" class="u-full-width prop-background-color">
	</div>
</div>
<div class="row">
	<div class="four columns">
		<label>Border Width</label>
		<input type="number" class="u-full-width prop-border-width">
	</div>
	<div class="four columns">
		<label>Border Style</label>
		<select class="u-full-width prop-border-style">
			<option value="dashed">Dashed</option>
			<option value="dotted">Dotted</option>
			<option value="double">Double</option>
			<option value="groove">Groove</option>
			<option value="hidden">Hidden</option>
			<option value="inherit">Inherit</option>
			<option value="initial">Initial</option>
			<option value="inset">Inset</option>
			<option value="none">None</option>
			<option value="outset">Outset</option>
			<option value="ridge">Ridge</option>
			<option value="solid">Solid</option>
		</select>
	</div>
	<div class="four columns">
		<label>Border Radius</label>
		<input type="number" class="u-full-width prop-border-radius">
	</div>
</div>
<div class="row">
	<div class="twelve columns">
		<label>Border Color</label>
		<input type="color" class="u-full-width prop-border-color">
	</div>
</div>
<div class="row">
	<div class="twelve columns">
		<label>Show on all pages</label>
		<label class="switch switch-green">
			<input type="checkbox" class="switch-input prop-switch-showall">
			<span class="switch-label" data-on="Yes" data-off="No"></span>
			<span class="switch-handle"></span>
		</label>
	</div>
</div>
</div>

<!-- Image -->
<div id="properties-image" class="panel-properties">
	<div class="row">
	<div class="twelve columns">
		<label>Opacity</label>
		<input type="range" min="0" max="100" id="prop-opacity-image" class="u-full-width prop-opacity" />
	</div>
</div>
<div class="row">
	<div class="three columns">
		<label class="tacenter">Width</label>
		<input type="number" id="prop-width-image" class="u-full-width prop-width" />
	</div>
	<div class="three columns">
		<label class="tacenter">Height</label>
		<input type="number" id="prop-height-image" class="u-full-width prop-height" />
	</div>
	<div class="three columns">
		<label class="tacenter">X</label>
		<input type="number" id="prop-xpos-image" class="u-full-width prop-xpos" />
	</div>
	<div class="three columns">
		<label class="tacenter">Y</label>
		<input type="number" id="prop-ypos-image" class="u-full-width prop-ypos" />
	</div>
</div>
<div class="row">
	<div class="four columns">
		<label>Border Width</label>
		<input type="number" class="u-full-width prop-border-width">
	</div>
	<div class="four columns">
		<label>Border Style</label>
		<select class="u-full-width prop-border-style">
			<option value="dashed">Dashed</option>
			<option value="dotted">Dotted</option>
			<option value="double">Double</option>
			<option value="groove">Groove</option>
			<option value="hidden">Hidden</option>
			<option value="inherit">Inherit</option>
			<option value="initial">Initial</option>
			<option value="inset">Inset</option>
			<option value="none">None</option>
			<option value="outset">Outset</option>
			<option value="ridge">Ridge</option>
			<option value="solid">Solid</option>
		</select>
	</div>
	<div class="four columns">
		<label>Border Radius</label>
		<input type="number" class="u-full-width prop-border-radius">
	</div>
</div>
<div class="row">
	<div class="twelve columns">
		<label>Border Color</label>
		<input type="color" class="u-full-width prop-border-color">
	</div>
</div>
<div class="row">
	<div class="twelve columns">
		<label>Show on all pages</label>
		<label class="switch switch-green">
			<input type="checkbox" class="switch-input prop-switch-showall">
			<span class="switch-label" data-on="Yes" data-off="No"></span>
			<span class="switch-handle"></span>
		</label>
	</div>
</div>
</div>

<!-- Image -->
<div id="properties-container" class="panel-properties">
	<div class="row">
	<div class="twelve columns">
		<label>Opacity</label>
		<input type="range" min="0" max="100" id="prop-opacity-container" class="u-full-width prop-opacity" />
	</div>
</div>
<div class="row">
	<div class="three columns">
		<label class="tacenter">Width</label>
		<input type="number" id="prop-width-container" class="u-full-width prop-width" />
	</div>
	<div class="three columns">
		<label class="tacenter">Height</label>
		<input type="number" id="prop-height-container" class="u-full-width prop-height" />
	</div>
	<div class="three columns">
		<label class="tacenter">X</label>
		<input type="number" id="prop-xpos-container" class="u-full-width prop-xpos" />
	</div>
	<div class="three columns">
		<label class="tacenter">Y</label>
		<input type="number" id="prop-ypos-container" class="u-full-width prop-ypos" />
	</div>
</div>
<div class="row">
	<div class="four columns">
		<label>Border Width</label>
		<input type="number" class="u-full-width prop-border-width">
	</div>
	<div class="four columns">
		<label>Border Style</label>
		<select class="u-full-width prop-border-style">
			<option value="dashed">Dashed</option>
			<option value="dotted">Dotted</option>
			<option value="double">Double</option>
			<option value="groove">Groove</option>
			<option value="hidden">Hidden</option>
			<option value="inherit">Inherit</option>
			<option value="initial">Initial</option>
			<option value="inset">Inset</option>
			<option value="none">None</option>
			<option value="outset">Outset</option>
			<option value="ridge">Ridge</option>
			<option value="solid">Solid</option>
		</select>
	</div>
	<div class="four columns">
		<label>Border Radius</label>
		<input type="number" class="u-full-width prop-border-radius">
	</div>
</div>
<div class="row">
	<div class="twelve columns">
		<label>Border Color</label>
		<input type="color" class="u-full-width prop-border-color">
	</div>
</div>
<div class="row">
	<div class="twelve columns">
		<label>Background Color</label>
		<input type="color" id="prop-background-color-container" class="u-full-width prop-background-color">
	</div>
</div>
<div class="row">
	<div class="twelve columns">
		<label>Show on all pages</label>
		<label class="switch switch-green">
			<input type="checkbox" class="switch-input prop-switch-showall">
			<span class="switch-label" data-on="Yes" data-off="No"></span>
			<span class="switch-handle"></span>
		</label>
	</div>
</div>
</div>

<!-- Widget Gallery -->
<div id="properties-gallery" class="panel-properties">
	<div class="row">
	<div class="three columns">
		<label class="tacenter">Category Width</label>
		<input type="number" id="prop-width-category-gallery" class="u-full-width" />
	</div>
	<div class="three columns">
		<label class="tacenter">Gallery Width</label>
		<input type="number" id="prop-width-image-container-gallery" class="u-full-width" />
	</div>
	<div class="three columns">
		<label class="tacenter">Image Width</label>
		<input type="number" id="prop-width-image-gallery" class="u-full-width" />
	</div>
	<div class="three columns">
		<label class="tacenter">Image Height</label>
		<input type="number" id="prop-height-image-gallery" class="u-full-width" />
	</div>
</div>
<div class="row">
	<div class="three columns">
		<label class="tacenter">Padding Top</label>
		<input type="number" id="prop-padding-top-gallery" class="u-full-width" />
	</div>
	<div class="three columns">
		<label class="tacenter">Padding Right</label>
		<input type="number" id="prop-padding-right-gallery" class="u-full-width" />
	</div>
	<div class="three columns">
		<label class="tacenter">Padding Bottom</label>
		<input type="number" id="prop-padding-bottom-gallery" class="u-full-width" />
	</div>
	<div class="three columns">
		<label class="tacenter">Padding Left</label>
		<input type="number" id="prop-padding-left-gallery" class="u-full-width" />
	</div>
</div>
<div class="row">
	<div class="twelve columns">
		<label>Background Color</label>
		<input type="color" id="prop-background-color-container" class="u-full-width prop-background-color">
	</div>
</div>
<div class="row">
	<div class="twelve columns">
		<label>Show on all pages</label>
		<label class="switch switch-green">
			<input type="checkbox" class="switch-input prop-switch-showall">
			<span class="switch-label" data-on="Yes" data-off="No"></span>
			<span class="switch-handle"></span>
		</label>
	</div>
</div>
</div>

<!-- Widget Article -->
<div id="properties-article" class="panel-properties">
<div class="row">
	<div class="twelve columns">
		<label class="tacenter">Category Width</label>
		<input type="number" id="prop-width-category-article" class="u-full-width" />
	</div>
</div>
<div class="row">
	<div class="twelve columns">
		<label>Background Color</label>
		<input type="color" id="prop-background-color-container" class="u-full-width prop-background-color">
	</div>
</div>
<div class="row">
	<div class="twelve columns">
		<label>Show on all pages</label>
		<label class="switch switch-green">
			<input type="checkbox" class="switch-input prop-switch-showall">
			<span class="switch-label" data-on="Yes" data-off="No"></span>
			<span class="switch-handle"></span>
		</label>
	</div>
</div>
</div>

<!-- Event of Element -->

<!-- Link -->
<div id="event-link" class="panel-event">
	<div class="row">
	<div class="twelve columns">
		<label>Link To:</label>
		<select id="ddlLinkTo" class="u-full-width">
			<option value="link-page">Page</option>
			<option value="link-url">URL</option>
		</select>
	</div>
</div>
<div class="row section-link-page">
	<div class="twelve columns">
		<label>Page</label>
		<select class="u-full-width" id="ddlListPage">
		</select>
	</div>
</div>
<div class="row section-link-url hide">
	<div class="twelve columns">
		<label>URL</label>
		<input placeholder="Ketik URL disini &hellip;" id="txtLinkURL" type="text" class="u-full-width" />
	</div>
</div>
<div class="row">
	<div class="twelve columns">
		<input type="button" id="btnApplyEventLink" value="Apply" class="u-full-width" />
	</div>
</div>
</div>

<div class="contextmenu">
	<ul class="menu-default">
		<li class="manipulate-element" type="properties">Properties</li>
		<li class="manipulate-element" type="events">Events</li>
	</ul>
	<ul class="menu-default">
		<li class="manipulate-element" type="cut">Cut</li>
		<li class="manipulate-element" type="copy">Copy</li>
		<li class="manipulate-element" type="duplicate">Duplicate</li>
		<li class="manipulate-element" type="delete">Delete</li>
	</ul>
	<ul class="menu-default">
		<li class="reorder-element" type="bring-to-front">Bring to Front</li>
		<li class="reorder-element" type="bring-forward">Bring Forward</li>
		<li class="reorder-element" type="send-backward">Send Backward</li>
		<li class="reorder-element" type="send-to-back">Send to Back</li>
	</ul>
	<ul class="no-after menu-paste">
		<li class="manipulate-element" type="paste">Paste</li>
	</ul>
</div>

<div class="edit-param-element right-side" style="display:none">
	<div class="header">
		<h5 class="title"></h5>
	</div>
	<div class="container category-view">
	<div class="title-section">Border</div>
	<div class="row">
		<div class="six columns">
			<label class="tacenter">Width</label>
			<input attribute="stroke-width" class="u-full-width param" type="number">
		</div>
		<div class="six columns">
			<label class="tacenter">Color</label>
			<input attribute="stroke" class="u-full-width param" type="color">
		</div>
	</div>
	<div class="title-section">Border Line</div>
	<div class="row">
		<div class="six columns">
			<label class="tacenter">Join</label>			
			<select attribute="stroke-linejoin" class="u-full-width param">
				<option value="mitter">Mitter</option>
				<option value="round">Round</option>
				<option value="bevel">Bevel</option>
			</select>
		</div>
		<div class="six columns">
			<label class="tacenter">Cap</label>
			<select attribute="stroke-linecap" class="u-full-width param">
				<option value="butt">Butt</option>
				<option value="square">Square</option>
				<option value="round">Round</option>
			</select>
		</div>
	</div>
	<div class="title-section">Fill</div>
	<div class="row">
		<div class="six columns">
			<label class="tacenter">Opacity</label>
			<input  attribute="fill-opacity" class="u-full-width param" type="number"></div>
		<div class="six columns">
			<label class="tacenter">Color</label>
			<input attribute="fill" class="u-full-width param" type="color"></div>
	</div>
	<div class="title-section">General</div>
	<div class="row">
		<div class="twelve columns">
			<label>Text</label>
			<input id="element-text" class="u-full-width" type="text">
		</div>
	</div>
	<div id="itemTemplate">
		
	</div>
	</div>
</div>