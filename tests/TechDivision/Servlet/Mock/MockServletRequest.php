<?php

/**
 * TechDivision\Servlet\Mock\MockServletRequest
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category  Appserver
 * @package   TechDivision_Servlet
 * @author    Tim Wagner <tw@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://www.appserver.io
 */

namespace TechDivision\Servlet\Mock;

/**
 * A servlet request mock implementation.
 *
 * @category  Appserver
 * @package   TechDivision_Servlet
 * @author    Tim Wagner <tw@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://www.appserver.io
 */
interface ServletRequest
{
    
    /**
     * Returns the application context name (application name) for the acutal request.
     * 
     * @return string The application context name
     */
    public function getContextPath();
    
    /**
     * Returns the path to the servlet used to handle this request.
     * 
     * @return string The relative path to the servlet
     */
    public function getServletPath();
    
    /**
     * Returns the host name passed with the request header.
     * 
     * @return string The host name of this request
     */
    public function getServerName();
    
    /**
     * Returns the absolute path info started from the context path.
     * 
     *  @return string the absolute path info
     *  @see \TechDivision\Servlet\ServletRequest::getPathInfo()
     */
    public function getPathInfo();

    /**
     * Returns an array with all request parameters.
     *
     * @return array The array with the request parameters
     */
    public function getParameterMap();

    /**
     * Returns header info by given key
     *
     * @param string $key The header key to get
     *
     * @return string|null
     */
    public function getHeader($key);

    /**
     * Returns accepted encodings data
     *
     * @return array
     */
    public function getAcceptedEncodings();

    /**
     * Returns query string of the actual request.
     *
     * @return string|null The query string of the actual request
     */
    public function getQueryString();

    /**
     * Returns the servers IP v4 address.
     *
     * @return string The servers IP v4 address
     */
    public function getServerAddress();

    /**
     * Returns server port
     *
     * @return string
     */
    public function getServerPort();

    /**
     * Returns the array with all headers.
     *
     * @return array The headers as array
     */
    public function getHeaders();

    /**
     * Return request content. 
     *
     * @return string The request content
     */
    public function getContent();

    /**
     * Returns request method.
     *
     * @return string The request method
     */
    public function getMethod();

    /**
     * Returns request URI.
     *
     * @return string The request URI
     */
    public function getUri();

    /**
     * Returns protocol version, HTTP/1.1 for example.
     *
     * @return string The protocol version
     */
    public function getVersion();

    /**
     * Returns the clients IP address to send the content back to.
     *
     * @return mixed The clients IP addrress
     */
    public function getClientIp();

    /**
     * Returns the clients port to send the content back to.
     *
     * @return integer The clients port
     */
    public function getClientPort();

    /**
     * Returns the parameter with the passed name if available or null
     * if the parameter not exists.
     *
     * @param string  $name   The name of the parameter to return
     * @param integer $filter The filter to use
     *
     * @return string|null
     */
    public function getParameter($name, $filter = FILTER_SANITIZE_STRING);

    /**
     * Returns a part object by given name
     *
     * @param string $name The name of the form part
     *
     * @return \TechDivision\Http\HttpPart
     */
    public function getPart($name);

    /**
     * Returns the parts collection as array
     *
     * @return array A collection of HttpPart objects
     */
    public function getParts();

    /**
     * Returns TRUE if the request has a cookie header with the passed
     * name, else FALSE.
     *
     * @param string $cookieName Name of the cookie header to be checked
     *
     * @return boolean TRUE if the request has the cookie, else FALSE
     */
    public function hasCookie($cookieName);

    /**
     * Returns the value of the cookie with the passed name.
     *
     * @param string $cookieName The name of the cookie to return
     *
     * @return mixed The cookie value
     */
    public function getCookie($cookieName);
}
