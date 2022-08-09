==============================================
Rule ``no_trailing_comma_in_singleline_array``
==============================================

PHP single-line arrays should not have trailing comma.

Warning
-------

This rule is deprecated and will be removed on next major version
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

You should use ``no_trailing_comma_in_singleline`` instead.

Examples
--------

Example #1
~~~~~~~~~~

.. code-block:: diff

   --- Original
   +++ New
    <?php
   -$a = array('sample',  );
   +$a = array('sample');

Rule sets
---------

The rule is part of the following rule set:

@Laravel
  Using the `@Laravel <./../../ruleSets/Laravel.rst>`_ rule set will enable the ``no_trailing_comma_in_singleline_array`` rule.
