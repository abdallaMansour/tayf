// Get the base URL dynamically from the current location
const getBaseUrl = () => {
    const currentPath = window.location.pathname;

    const pathSegments = currentPath.split('/').filter(segment => segment !== '');
    
    // Find the project path (EVORQ/tayf)
    let projectPath = '';
    if (pathSegments.length >= 2) {
        projectPath = `/${pathSegments[0]}/${pathSegments[1]}`;
    }

    return projectPath;
};

// Export the base URL for use in other files
export const BASE_URL = getBaseUrl();

// Default configuration
export default {
    status: {
        active: 1,
        inactive: 2
    },
    amount_type: {
        percent: 1,
        flat: 2,
    },
    footer_widgets:{
        newsletter_widget:79,
        address_widget:78,
    },
    // Add base URL to config
    baseUrl: BASE_URL
};