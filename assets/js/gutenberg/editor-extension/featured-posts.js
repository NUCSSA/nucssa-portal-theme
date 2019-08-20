import { registerPlugin } from '@wordpress/plugins';
import { PluginPostStatusInfo } from '@wordpress/edit-post';
import { Component } from '@wordpress/element';

class FeaturedPosts extends Component {
  constructor() {
    super();
    this.state = {
      isFeaturedPost: false,
      priority: 0
    };
  }

  componentDidMount() {
    console.log('compoennt mounted');
  }

  render() {
    return (
      <PluginPostStatusInfo className="nucssa-theme-featured-posts">
        <p>NUCSSA Featured Posts</p>
      </PluginPostStatusInfo>
    );
  }
}

registerPlugin('nucssa-theme-plugin', {
  render: FeaturedPosts
});
