var Prescreen = React.createClass({
  getInitialState: function() {
    return {value: {"abc": 10}};
  },
  handleChange: function() {
    this.setState({value: this.parseText(this.refs.textarea.value)});
  },
  parseText: function (rawText) {
    lines = rawText.split('\n');
    outArray = {};
    for (line in lines){
      key, val = line.split(":");
      outArray[key] = val;
    }
    return outArray;
  },
  rawMarkup: function() {
    return { __html: marked(this.state.value, {sanitize: true}) };
  },
  render: function() {
    return (
      <div className="MarkdownEditor">
        <h3>Input</h3>
        <textarea
          onChange={this.handleChange}
          ref="textarea"
          defaultValue={this.state.value} />
        <h3>Output</h3>
        <div
          className="content"
          dangerouslySetInnerHTML={this.rawMarkup()}
        />
      </div>  
    );
  }
});

ReactDOM.render(<Prescreen />, document.getElementById('content'));