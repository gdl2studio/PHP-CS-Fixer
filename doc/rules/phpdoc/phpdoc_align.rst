=====================
Rule ``phpdoc_align``
=====================

All items of the given phpdoc tags must be either left-aligned or (by default)
aligned vertically.

Configuration
-------------

``tags``
~~~~~~~~

The tags that should be aligned.

Allowed values: a subset of ``['method', 'param', 'property', 'property-read', 'property-write', 'return', 'throws', 'type', 'var']``

Default value: ``['method', 'param', 'property', 'return', 'throws', 'type', 'var']``

``align``
~~~~~~~~~

How comments should be aligned.

Allowed values: ``'left'``, ``'vertical'``

Default value: ``'vertical'``

``spacing``
~~~~~~~~~~~

Spacing between tag, hint, comment, signature, etc. You can set same spacing for
all tags using a positive integer or different spacings for different tags using
an associative array of positive integers ``['tagA' => spacingForA, 'tagB' =>
spacingForB]``.

Allowed types: ``int``, ``int[]``

Default value: ``1``

Examples
--------

Example #1
~~~~~~~~~~

*Default* configuration.

.. code-block:: diff

   --- Original
   +++ New
    <?php
    /**
   - * @param  EngineInterface $templating
   - * @param string      $format
   - * @param  int  $code       An HTTP response status code
   - *                              See constants
   - * @param    bool         $debug
   - * @param    bool         $debug See constants
   - * See constants
   - * @param  mixed    &$reference     A parameter passed by reference
   + * @param EngineInterface $templating
   + * @param string          $format
   + * @param int             $code       An HTTP response status code
   + *                                    See constants
   + * @param bool            $debug
   + * @param bool            $debug      See constants
   + *                                    See constants
   + * @param mixed           &$reference A parameter passed by reference
     *
     * @return Foo description foo
     *
   - * @throws Foo            description foo
   + * @throws Foo description foo
     *             description foo
     *
     */

Example #2
~~~~~~~~~~

With configuration: ``['align' => 'vertical']``.

.. code-block:: diff

   --- Original
   +++ New
    <?php
    /**
   - * @param  EngineInterface $templating
   - * @param string      $format
   - * @param  int  $code       An HTTP response status code
   - *                              See constants
   - * @param    bool         $debug
   - * @param    bool         $debug See constants
   - * See constants
   - * @param  mixed    &$reference     A parameter passed by reference
   + * @param EngineInterface $templating
   + * @param string          $format
   + * @param int             $code       An HTTP response status code
   + *                                    See constants
   + * @param bool            $debug
   + * @param bool            $debug      See constants
   + *                                    See constants
   + * @param mixed           &$reference A parameter passed by reference
     *
     * @return Foo description foo
     *
   - * @throws Foo            description foo
   + * @throws Foo description foo
     *             description foo
     *
     */

Example #3
~~~~~~~~~~

With configuration: ``['align' => 'left']``.

.. code-block:: diff

   --- Original
   +++ New
    <?php
    /**
   - * @param  EngineInterface $templating
   - * @param string      $format
   - * @param  int  $code       An HTTP response status code
   - *                              See constants
   - * @param    bool         $debug
   - * @param    bool         $debug See constants
   - * See constants
   - * @param  mixed    &$reference     A parameter passed by reference
   + * @param EngineInterface $templating
   + * @param string $format
   + * @param int $code An HTTP response status code
   + *                  See constants
   + * @param bool $debug
   + * @param bool $debug See constants
   + *                    See constants
   + * @param mixed &$reference A parameter passed by reference
     *
     * @return Foo description foo
     *
   - * @throws Foo            description foo
   + * @throws Foo description foo
     *             description foo
     *
     */

Example #4
~~~~~~~~~~

With configuration: ``['align' => 'left', 'spacing' => 2]``.

.. code-block:: diff

   --- Original
   +++ New
    <?php
    /**
   - * @param  EngineInterface $templating
   - * @param string      $format
   - * @param  int  $code       An HTTP response status code
   - *                              See constants
   - * @param    bool         $debug
   - * @param    bool         $debug See constants
   - * See constants
   - * @param  mixed    &$reference     A parameter passed by reference
   + * @param  EngineInterface  $templating
   + * @param  string  $format
   + * @param  int  $code  An HTTP response status code
   + *                     See constants
   + * @param  bool  $debug
   + * @param  bool  $debug  See constants
   + *                       See constants
   + * @param  mixed  &$reference  A parameter passed by reference
     *
   - * @return Foo description foo
   + * @return  Foo  description foo
     *
   - * @throws Foo            description foo
   - *             description foo
   + * @throws  Foo  description foo
   + *               description foo
     *
     */

Example #5
~~~~~~~~~~

With configuration: ``['align' => 'left', 'spacing' => ['param' => 2]]``.

.. code-block:: diff

   --- Original
   +++ New
    <?php
    /**
   - * @param  EngineInterface $templating
   - * @param string      $format
   - * @param  int  $code       An HTTP response status code
   - *                              See constants
   - * @param    bool         $debug
   - * @param    bool         $debug See constants
   - * See constants
   - * @param  mixed    &$reference     A parameter passed by reference
   + * @param  EngineInterface  $templating
   + * @param  string  $format
   + * @param  int  $code  An HTTP response status code
   + *                     See constants
   + * @param  bool  $debug
   + * @param  bool  $debug  See constants
   + *                       See constants
   + * @param  mixed  &$reference  A parameter passed by reference
     *
     * @return Foo description foo
     *
   - * @throws Foo            description foo
   + * @throws Foo description foo
     *             description foo
     *
     */

Rule sets
---------

The rule is part of the following rule sets:

@Laravel
  Using the `@Laravel <./../../ruleSets/Laravel.rst>`_ rule set will enable the ``phpdoc_align`` rule with the config below:

  ``['align' => 'left', 'spacing' => ['param' => 2]]``

@PhpCsFixer
  Using the `@PhpCsFixer <./../../ruleSets/PhpCsFixer.rst>`_ rule set will enable the ``phpdoc_align`` rule with the default config.

@Symfony
  Using the `@Symfony <./../../ruleSets/Symfony.rst>`_ rule set will enable the ``phpdoc_align`` rule with the default config.
