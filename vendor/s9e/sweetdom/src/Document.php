<?php declare(strict_types=1);

/**
* @package   s9e\SweetDOM
* @copyright Copyright (c) The s9e authors
* @license   http://www.opensource.org/licenses/mit-license.php The MIT License
*/
namespace s9e\SweetDOM;

use DOMDocument;
use DOMNode;
use DOMNodeList;
use DOMXPath;
use function func_get_args;

/**
* @method Attr|false createAttribute(string $localName)
* @method Attr|false createAttributeNS(?string $namespace, string $qualifiedName)
* @method CdataSection|false createCDATASection(string $data)
* @method Comment createComment(string $data)
* @method DocumentFragment createDocumentFragment()
* @method Element|false createElement(string $localName, string $value = '')
* @method Element|false createElementNS(?string $namespace, string $qualifiedName, string $value = '')
* @method Text createTextNode(string $data)
* @method ?Element getElementById(string $elementId)
* @property ?DocumentType $doctype
* @property ?Element $documentElement
* @property ?Element $firstElementChild
* @property ?Element $lastElementChild
* @property ?Document $ownerDocument
* @property ?Element $parentElement
*/
class Document extends DOMDocument
{
	public NodeCreator $nodeCreator;

	/**
	* @link https://www.php.net/manual/domdocument.construct.php
	*/
	public function __construct(string $version = '1.0', string $encoding = '')
	{
		parent::__construct($version, $encoding);

		$this->nodeCreator = new NodeCreator($this);

		$this->registerNodeClass('DOMAttr',             Attr::class);
		$this->registerNodeClass('DOMCdataSection',     CdataSection::class);
		$this->registerNodeClass('DOMComment',          Comment::class);
		$this->registerNodeClass('DOMDocumentFragment', DocumentFragment::class);
		$this->registerNodeClass('DOMElement',          Element::class);
		$this->registerNodeClass('DOMText',             Text::class);
	}

	/**
	* Evaluate and return the result of a given XPath expression
	*/
	public function evaluate(string $expression, ?DOMNode $contextNode = null, bool $registerNodeNS = true): mixed
	{
		return $this->xpath('evaluate', func_get_args());
	}

	/**
	* Evaluate and return the first element of a given XPath query
	*/
	public function firstOf(string $expression, ?DOMNode $contextNode = null, bool $registerNodeNS = true): ?DOMNode
	{
		return $this->xpath('query', func_get_args())->item(0);
	}

	/**
	* Evaluate and return the result of a given XPath query
	*/
	public function query(string $expression, ?DOMNode $contextNode = null, bool $registerNodeNS = true): DOMNodeList
	{
		return $this->xpath('query', func_get_args());
	}

	/**
	* Execute a DOMXPath method and return the result
	*/
	protected function xpath(string $methodName, array $args): mixed
	{
		$xpath = new DOMXPath($this);
		$xpath->registerNamespace('xsl', 'http://www.w3.org/1999/XSL/Transform');
		$xpath->registerNodeNamespaces = true;

		return $xpath->$methodName(...$args);
	}
}